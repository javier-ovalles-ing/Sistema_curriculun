<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\validation\Rules;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function __construct(){

        $this->middleware('auth',['except'=>['']]);                                       
    }
    public function show(){


        $users = User::get();

        return view('user.index',['users'=> $users]);
    }

    public function crear(){
       
        return view('user.crear',[ 'user' => new User()]);
    }

    public function guardar(Request $request){

            $request->validate([
                'name' => ['required','string','max:255'],
                'email' => ['required','string','email','max:255','unique:users'],
                'password' => ['required','confirmed']
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            return to_route('user.index')->with('mensaje','usuario '. $request->name.' creado');
    }

    public function editar(User $user){

         

        return view('user.editar',['user'=>$user]);

    }

    public function borrar(User $user){

        $name = $user->name;

        $user->delete();

        return to_route('user.index')->with('mensaje','usuario eliminado');
    }

    public function actualizar(Request $request, User $user) {

        $validated = $request->validate([
                'name' => ['required','string','max:255'],
                'email' => ['required', 'email', 'unique:users,email,' . $user->id],
                'password' => ['confirmed']
        ]);

       

        $user->update($validated);

        return to_route('user.index')->with('mensaje','usuario '.$user->name.' actualizado');
    }
}
