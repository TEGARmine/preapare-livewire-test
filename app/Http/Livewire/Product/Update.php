<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $productId;
    public $product;
    public $image;
    public $imageOld;

    protected $rules = [
        'product.title' => 'nullabe',
        'product.price' => 'nullabe',
        'product.description' => 'nullabe'
    ];

    public function mount()
    {
        $product = Product::where('id', $this->productId)->first();
        $this->product = $product;
        $this->imageOld = asset('/storage/' . $product['image']);
        // dd($this->product);
        // dd($this->imageOld);
    }

    public function render()
    {
        return view('livewire.product.update');
    }
}
