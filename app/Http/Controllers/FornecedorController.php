<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $titulo = 'Fornecedores';
        return view('app.fornecedor', compact('titulo'));
    }
}
