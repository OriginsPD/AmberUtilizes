<?php

namespace App\Http\Livewire\Navigation;

use Livewire\Component;

class HomeNavi extends Component
{
    public bool $isRegister = false;

    public function addUser(): void
    {
        $this->isRegister = true;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function allowUser(): void
    {
        $this->isRegister = false;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function render()
    {
        return view('livewire.navigation.home-navi');
    }
}
