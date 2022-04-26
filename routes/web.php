<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{Cadastro, 
    Entrar, 
    Contato,
    HomeController, 
    Produtos};

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

Route::get('/', function () {
    return view('index');
});

//cadastro
Route::get('/cadastro', [Cadastro::class, 'index']);
Route::post('/cadastro/registro', [Cadastro::class, 'cadastro']);

//entrar
Route::get('/entrar', [Entrar::class, 'index']);
Route::post('/entrar', [Entrar::class, 'entrar']);

Route::get('/produtos', [Produtos::class,'index']);


Route::get('/contato', [Contato::class, 'index']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/sair', function() {
    Auth::logout();
    return redirect('/')->with('status','Você saiu!');
}); 
