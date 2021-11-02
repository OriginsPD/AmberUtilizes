<?php

namespace App\Http\Livewire\Home;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopDashboard extends Component
{
    use WithPagination;

    protected int $pagination = 4;

    public array $qty = [];

    public $productsQty;

    public array $cartProduct = [];

    public function addToCart($productID,$productPrice): void
    {

        Cart::create([
            'product_id' => $productID,
            'qty' => $this->qty[$productID],
            'price' => $productPrice
        ]);

        $this->emit('updateCart');

    }

    public function removeFromCart($productID): void
    {
        Cart::where('product_id', $productID)->delete();
        if (($key = array_search($productID, $this->cartProduct, true)) !== false) {
            unset($this->cartProduct[$key]);

            $this->emit('updateCart');

        }
    }

    public function mount(): void
    {
        $this->productsQty = Product::all();

        foreach ($this->productsQty as $product) {
            $this->qty[$product->id] = 1;
        }

        $cartItems = Cart::all('product_id');

        foreach ($cartItems as $cartItem) {
            $this->cartProduct[] = $cartItem->product_id;
        }

    }

    public function render()
    {
        $cartItems = Cart::all('product_id');

        foreach ($cartItems as $cartItem) {
            $this->cartProduct[] = $cartItem->product_id;
        }

        return view('livewire.home.shop-dashboard', [
            'products' => Product::paginate($this->pagination),
        ])
            ->extends('layouts.app');
    }

}
