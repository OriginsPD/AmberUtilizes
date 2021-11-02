<?php

namespace App\Http\Livewire\Navigation;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminSide extends Component
{
    public function render()
    {
        return view('livewire.navigation.admin-side');
    }

    public function logout()
    {
            Auth::logout();

            session()->invalidate();

        session()->regenerateToken();

        return redirect('/');
    }
}
