<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $phone = '';
    public $code = '';
    public $gender = '';

    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'code' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'phone' => $this->phone,
            'tool_code' => $this->code,
            'gender' => $this->gender,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect('/project/scale/home');
    }
    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.app', ['tittle' => 'Register IOT']);
    }
}
