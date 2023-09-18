<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use App\Http\Controllers\PuestoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::get('/user',[UserController::class,'show'])->name('user.index');
Route::get('/user/crear',[UserController::class,'crear'])->name('user.crear');
Route::post('/user/guardar',[UserController::class,'guardar'])->name('user.guardar');
Route::get('/user/{user}/editar',[UserController::class,'editar'])->name('user.editar');
Route::patch('/user/{user}',[UserController::class,'actualizar'])->name('user.actualizar');
Route::delete('/user/{user}',[UserController::class,'borrar'])->name('user.borrar');

// puesto

Route::get('/puesto',[PuestoController::class,'show'])->name('puesto.index');
Route::get('/puesto/crear',[PuestoController::class,'crear'])->name('puesto.crear');
Route::post('/puesto/guardar',[PuestoController::class,'guardar'])->name('puesto.guardar');
Route::get('/puesto/{puesto}/editar',[PuestoController::class,'editar'])->name('puesto.editar');
Route::patch('/puesto/{puesto}',[PuestoController::class,'actualizar'])->name('puesto.actualizar');
Route::delete('/puesto/{puesto}',[PuestoController::class,'borrar'])->name('puesto.borrar');

//Empleado

Route::get('/empleado',[EmpleadoController::class,'show'])->name('empleado.index');
Route::get('/empleado/crear',[EmpleadoController::class,'crear'])->name('empleado.crear');
Route::post('/empleado/guardar',[EmpleadoController::class,'guardar'])->name('empleado.guardar');
Route::get('/empleado/{empleado}/editar',[EmpleadoController::class,'editar'])->name('empleado.editar');
Route::patch('/empleado/{empleado}',[EmpleadoController::class,'actualizar'])->name('empleado.actualizar');
Route::delete('/empleado/{empleado}', [EmpleadoController::class, 'borrar'])->name('empleado.borrar');

Route::get('/empeado/{empleado}/carta',[EmpleadoController::class,'download'])->name('empleado.carta');

// reseteo contraseña

Route::get('/forgot-password', [forgotPasswordController::class,'enviarFormulario'])->middleware('guest')->name('password.request');
Route::post('/forgot-password',[forgotPassowrdController::class, 'prosesarFormulario'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [resetPassowrdController::class,'enviarFormularioReset'])->middleware('guest')->name('password.reset');
Route::post('/reset-password',[resetPasswordController::class,'prosesarFormularioReset'])->middleware('guest')->name('password.update');

// Login/logout

Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthenticatedSessionController::class,'store']);

Route::view('/register','auth.register')->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);

Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');