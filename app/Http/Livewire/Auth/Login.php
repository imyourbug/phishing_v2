<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email:rfc,dns',
        'password' => 'required|min:6',
    ];

    //This mounts the default credentials for the admin. Remove this section if you want to make it public.
    public function mount()
    {
        if (auth()->user()) {
            return redirect()->intended('/languages');
        }
    }

    public function login()
    {
        $this->validate();
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(['email' => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/languages');
        } else {
            return $this->addError('email', trans('auth.failed'));
        }
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.auth.login');
    }
}
