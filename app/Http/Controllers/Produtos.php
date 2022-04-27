<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produtos extends Controller
{
    public function index() {
        return view ('produto.produtos');
    }
}
