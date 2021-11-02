<?php

namespace App\Http\Livewire\Auth;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public User $user;

    public $password;

    protected array $rules = [
        'user.username' => 'required',
        'user.email' => 'required|unique:user,email',
        'password' => 'required|min:4'
    ];

    public function storeUser(): void
    {
        $this->validate([
            'password' => 'required|min:4'
        ]);

       $id = User::create([
            'username' => $this->user->username,
            'email' => $this->user->email,
            'password' =>  $this->password,
        ])->id;

       Customer::create([
           'username' => $this->user->username,
           'status' => 0,
       ]);

        if (Auth::attempt(['email' => $this->user->email,
            'password' => $this->user->password])) {

            $this->redirect(route('index.products'));

        }

    }

    public function updated(): void
    {
        $this->validate([
            'password' => 'min:4'
        ]);
    }

    public function mount(): void
    {
        $this->user = new User;
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
