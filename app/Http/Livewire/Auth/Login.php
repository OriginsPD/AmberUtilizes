<?php

namespace App\Http\Livewire\Auth;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public User $user;

    public $password;

    protected array $rules = [
        'user.email' => 'required',
        'password' => 'required'
    ];

    public function userSubmit(): void
    {

        $this->validate();


        if (Auth::attempt(['email' => $this->user->email,'password' => $this->password])){



            if (auth()->user()->isAdmin) {

                $this->redirect(route('admin.dashboard'));

            }
            else{

                $this->redirect('/');
            }


        }

        $this->addError('user.email',trans('auth.password'));

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
        return view('livewire.auth.login');
    }
}
