<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato extends Controller
{
    public function index() 
    {
        return view('contato');
    }
}
