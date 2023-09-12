<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Validation\validationException;
class AuthenticatedSessionController extends Controller
{
    //
    public function store(Request $request){

        $credentials = $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','string']
        ]);

        if(!Auth::attempt($credentials, $request->boolean('recordar')))
        {
            throw validationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended()->with('mensaje','tu estas logeado');
    }  

    public function destroy(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')->with('mensaje','tu estas logged out!');
    }
}
