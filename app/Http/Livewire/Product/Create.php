<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $products;
    public $image;

    protected $rules = [
        'products.title' => 'required',
        'products.price' => 'required|numeric',
        'products.description' => 'required'
    ];

    public function store()
    {
        $data = $this->validate();

        $imageName = '';

        if ($data['products']['image']) {
            $imageName = \Str::slug($data['products']['title'], '-')
                . '-'
                . uniqid()
                . '.' . $data['products']['image']->getClientOriginalExtension();

            $this->image->storeAs('public', $imageName, 'local');
        }
        // Product::create($data['products']);

        // Product::create([
        //     'title' => $data['products']['title'],
        //     'price' => $data['products']['price'],
        //     'description' => $data['description'],
        //     'image' => $imageName
        // ]);

    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
