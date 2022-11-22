<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use App\Models\Contato;
use App\Models\MotivoContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function __construct(Contato $contato, MotivoContato $motivo_contato)
    {
        $this->middleware(LogAcessoMiddleware::class);
        $this->contato = $contato;
        $this->motivo_contato = $motivo_contato;
    }

    public function contato()
    {
        $motivo_contatos_id = $this->motivo_contato->all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos_id' => $motivo_contatos_id]);
    }

    public function salvar(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:30|unique:site_contatos,nome',
            'telefone' => 'required',
            'email' => 'required|unique:site_contatos,email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ];

        $msg = [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 30 caracteres',
            'nome.unique' => 'O campo nome já esta cadastrado',
            'telefone.required' => 'O campo telefone é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.unique' => 'O campo email já esta cadastrado',
            'motivo_contatos_id.required' => 'O campo motivo contatos é obrigatório',
            'mensagem.required' => 'O campo motivo mensagem é obrigatório',
            'mensagem.max' => 'O campo mensagem deve ter no máximo 2000 caracteres',

        ];

        $request->validate($regras, $msg);

        $this->contato->create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'motivo_contatos_id' => $request->motivo_contatos_id,
            'mensagem' => $request->mensagem
        ]);

        return redirect()->route('site.index');
    }
}
