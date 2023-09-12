<?php

namespace App\Http\Controllers\Auth;

use Illuminate\validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function store(Request $request){

          $user =   $request->validate([
                'name' => ['required','string','max:255'],
                'email' => ['required','string','email','max:255','unique:users'],
                'password' => ['required','confirmed', Rules\password::default()]
            ]);

            User::create($user);
        return to_route('login')->with('mensaje','usuario creado');
    }
}
