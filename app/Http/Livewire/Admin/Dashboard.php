<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public Product $product;

    protected $rules = [
        'product.name' => 'required|unique:products,name',
        'product.quantity' => 'required|numeric|min:1|max:99',
        'product.price' => 'required|numeric|min:1'
    ];

    public function storeProduct(): void
    {
        $this->validate();

        Product::create([
            'name' => $this->product->name,
            'quantity' => $this->product->quantity,
            'price' => $this->product->price,
        ]);

        session()->flash('success', 'Products Added Successfully');

        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('alert-modal');



    }

    public function updated(): void
    {
        $this->validate();
    }

    public function addProducts(): void
    {
        $this->dispatchBrowserEvent('open-modal');
    }

    public function mount(): void
    {
        $this->product = new Product;
    }

    public function render()
    {
        return view('livewire.admin.dashboard', [
            'products' => Product::paginate(7),
        ])
            ->extends('layouts.admin');
    }

}
