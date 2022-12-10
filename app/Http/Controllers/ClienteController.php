<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $titulo = 'Cliente';

        return view('app.cliente.index', compact('titulo'));
    }
}
