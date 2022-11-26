<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function __construct(MotivoContato $motivo_contato)
    {
        $this->motivo_contato = $motivo_contato;
    }

    public function principal()
    {
        $motivo_contatos_id = $this->motivo_contato->all();

        return view('site.principal', ['titulo' => 'Principal', 'motivo_contatos_id' => $motivo_contatos_id]);
    }
}
