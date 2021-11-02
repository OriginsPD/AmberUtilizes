<?php

namespace App\Http\Livewire\Navigation;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerNavi extends Component
{
    protected $listeners = ['updateCart' => 'render'];

    public function showCheckOut(): void
    {
        $this->dispatchBrowserEvent('open-modal');
    }

    public function render()
    {
        return view('livewire.navigation.customer-navi', [
            'cartCount' => Cart::all()->count(),
        ])
            ->extends('layouts.app');
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect('/');
    }
}
