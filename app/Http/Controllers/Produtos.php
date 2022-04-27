<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produtos extends Controller
{
    public function index() {
        return view ('produto.produtos');
    }

    public function toy() {
        return view ('produto.toy');
    }

    public function higiene() {
        return view ('produto.higiene');
    }

    public function remedio() {
        return view ('produto.remedio');
    }

    public function racao() {
        return view ('produto.racao');
    }

}
