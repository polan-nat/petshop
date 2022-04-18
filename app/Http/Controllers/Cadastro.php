<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro extends Controller
{
    public function index() {
        return view('login.cadastro');
    }
}
