<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Entrar extends Controller
{
    public function index()
    {
        return view('login.entrar');
    }

    public function entrar(Request $request)
    {

     if(!Auth::attempt($request->only(['email', 'password']))) {
         return redirect()
         ->back()
         ->withErrors('Usuário e/ou senha incorretos');
     } 
     return redirect('/')->with('status','Bem vindo '. Auth::user()->name);

     //Consertar o login, ele aprova todos, é pra aprovar somente os cadastrados.
    }

    public function user() {
        $user = Auth::user()->name;

        return view('login.usuario', compact('user'));
    }

    public function update(Request $request) {
        $user = Auth::user()->name;


        return view('login.usuario', compact('user'))->with('status', 'O cadastro foi atualizado!');
    }

    public function destroy() {
        Auth::delete()->name;

        return redirect('/')->with('Usuário excluido!');

    }

}
