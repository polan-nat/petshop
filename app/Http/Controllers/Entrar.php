<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Entrar extends Controller
{
    public function index()
    {
        return view ('login.entrar');
    }

    public function entrar(Request $request) {
        if(!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()
                ->back()
                ->withErrors('Usuário e/ou senha incorretos');
        }

        return redirect('/')->with('status', 'Usuário logado com sucesso!');
    
    }
}
