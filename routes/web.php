<?php

use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Teclados\CreateTeclado;
use App\Http\Livewire\Teclados\DeleteTeclado;
use App\Http\Livewire\Teclados\EditTeclado;
use App\Http\Livewire\Teclados\IndexTeclado;
use App\Http\Livewire\Teclados\VistaTeclado;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuario;
use App\Http\Livewire\Usuarios\VistaUsuario;
use App\Http\Livewire\Ventas\Ventascreate;
use App\Http\Livewire\Ventas\Ventasindex;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', Login::class)->name('login');
//Route::group(['middleware'=>'auth'], function(){

Route::get('/teclados', IndexTeclado::class)->name('teclados');
Route::get('/teclados/crear', CreateTeclado::class)->name('teclados.crear');
Route::get('/teclados/{teclado}/show', VistaTeclado::class)->name('teclados.vista');
Route::get('/teclados/{teclado}/edit', EditTeclado::class)->name('teclados.editar');
Route::get('/teclados/{teclado}/delete',DeleteTeclado::class)->name('teclados.delete');

Route::get('/usuarios', IndexUsuario::class)->name('usuarios');
Route::get('/usuarios/crear', CreateUsuario::class)->name('usuarios.crear');
Route::get('/usuarios/{usuario}/show', VistaUsuario::class)->name('usuarios.vista');
Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name('usuarios.editar');
Route::get('/usuarios/{usuario}/delete',DeleteUsuario::class)->name('usuarios.delete');

Route::get('/venta',Ventasindex::class)->name('ventas');
Route::get('/venta/crear',Ventascreate::class)->name('ventas.crear');
//});
