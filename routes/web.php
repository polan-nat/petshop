<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastro;

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