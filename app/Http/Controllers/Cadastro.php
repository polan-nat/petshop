<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Cadastro extends Controller
{
    public function index() {
        $cadastro = DB::table('users')->get();

        return view('login.cadastro', ['users' => $cadastro]);
    }

    
    public function cadastro(Request $request) {

    $data = $request->except('__token');
    $data['password'] = Hash::make($data['password']);
    $user = User::create($data);

    Auth::login($user);

    return redirect('/')->with('status', 'Usuário cadastrado com sucesso!');
        
    }
} 
