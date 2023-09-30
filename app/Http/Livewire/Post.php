<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Post extends Component
{

    public $message;

    protected $rules = [
        'message.body' => 'required'
    ];

    public function save() 
    {
        $this->validate();

        $user = Auth::user();
        $data = [
            'user_id' => $user->id,
            'body' => $this->message['body']
        ];

        $post = \App\Models\Post::create($data);

        $this->emit('postCreated', $post);

        $this->reset('message');
    }

    public function render()
    {
        return view('livewire.post');
    }
}
