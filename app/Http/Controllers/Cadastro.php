<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cadastro extends Controller
{
    public function index() {
        $cadastro = DB::table('cadastros')->get();

        return view('login.cadastro', ['cadastros' => $cadastro]);
    }

    public function cadastro(Request $request) {

        $request ->validate([
            'senha' => 'required|max:10'
        ]);

        DB::table('cadastros')->insert([
            'nome' => $request->nome,
            'email' => $request->email,
            'nascimento' => $request->nascimento,
            'senha' => $request->senha  
        ]);

        return redirect('/')->with('status', 'Usuário cadastrado com sucesso!');

        
    }
}
