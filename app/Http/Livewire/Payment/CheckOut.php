<?php

namespace App\Http\Livewire\Payment;

use App\Models\Cart;
use Livewire\Component;

class CheckOut extends Component
{
    public int $grandTotal = 0;

    protected $listeners = ['updateCart' => 'render'];

    public function render()
    {
        $items = Cart::with('Product')->get();

        $sum = 0;

        foreach ($items as $item){

            $currentPrice = $item->qty * $item->price;

            $sum += $currentPrice;
        }

        $this->grandTotal = $sum;

        return view('livewire.payment.check-out', [
            'cartItems' => Cart::with('Product')->get(),
        ])
            ->extends('layouts.app');
    }


}
