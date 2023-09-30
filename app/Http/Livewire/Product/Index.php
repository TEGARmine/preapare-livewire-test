<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $formCreate = false;

    protected $updatesQueryString = ['search' => ['except' => '']];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.product.index', [
            'products' => $this->search === null ? Product::latest()->paginate($this->paginate) : Product::latest()->where('title', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }
}
