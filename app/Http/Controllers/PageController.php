<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home'); // View da página inicial
    }

    public function sobre()
    {
        return view('sobre'); // View da página sobre
    }

    public function portifolio()
    {
        return view('portifolio'); // View do portfólio
    }

    public function contato()
    {
        return view('contato'); // View de contato
    }
}
