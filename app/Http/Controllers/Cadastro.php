<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cadastro extends Controller
{
    public function index() {
        $cadastro = DB::table('users')->get();

        return view('login.cadastro', ['users' => $cadastro]);
    }

    
    public function cadastro(Request $request) {

        $request ->validate([
            'password' => 'required|max:10'
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/')->with('status', 'Usuário cadastrado com sucesso!');

        
    }
} 
