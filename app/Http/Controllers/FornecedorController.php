<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    private $titulo;

    public function __construct()
    {
        $this->titulo = 'Fornecedores';
    }

    public function index()
    {
        return view('app.fornecedor.index', ['titulo' => $this->titulo]);
    }

    public function listar()
    {
        return view('app.fornecedor.listar',  ['titulo' => $this->titulo]);
    }

    public function adicionar(Request $request)
    {
        if (!empty($request->_token)) {

            $rules = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres',
                'uf.max' => 'O campo uf deve ter no máximo 2 caracteres',
            ];

            $request->validate($rules, $feedback);
            echo 'Cadastro';
        }
        return view('app.fornecedor.adicionar',  ['titulo' => $this->titulo]);
    }
}
