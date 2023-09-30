<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['postCreated'];

    public function render()
    {
        $posts = Post::with('user')->latest()->get();

        return view('livewire.post.index', compact('posts'));
    }

    public function postCreated()
    {
        
    }
}
