<?php

namespace App\Http\Livewire\Payment;

use App\Models\Cart;
use Livewire\Component;

class CheckOut extends Component
{
    protected $listeners = ['updateCart' => 'render'];

    public function render()
    {
        return view('livewire.payment.check-out',[
            'cartItems' => Cart::with('Product')->get(),
            'cartSum' => Cart::with('Product')->sum('price'),
        ])
            ->extends('layouts.app');
    }
}
