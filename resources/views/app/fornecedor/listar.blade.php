@extends('app.layout.basico')

@section('titulo', $titulo)

@section('conteudo')
   <div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Fornecedor - Listar</p>
    </div>
    @component('app._components.menu', ['router1' => 'app.fornecedor.adicionar', 'menu1' => 'Novo', 'router2' => 'app.fornecedor','menu2' => 'Consulta'])

    @endcomponent
    <div class="informacao-pagina">
        <div style="width: 30%;margin-left: auto; margin-right: auto;">
           <h3>...LISTAR...</h3>
        </div>
    </div>
   </div>
@endsection
