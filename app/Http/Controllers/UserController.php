<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function register(){
            $attributes = request()->validate([
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', Password::min(6), 'confirmed']
            ]);



            $user = User::create($attributes);

            Auth::login($user);

            return redirect('/');

    }

    public function login(){

        $attributes = request()->validate([
            "email" => ['required'],
            "password" => ['required']
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'sorry wrong credentials'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }
}
