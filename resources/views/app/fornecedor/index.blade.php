@extends('app.layout.basico')

@section('titulo', $titulo)

@section('conteudo')
   <div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Fornecedor</p>
    </div>

    @component('app._components.menu', ['router1' => 'app.fornecedor.adicionar', 'menu1' => 'Novo', 'router2' => 'app.fornecedor','menu2' => 'Consulta'])

    @endcomponent

    <div class="informacao-pagina">
        <div style="width: 30%;margin-left: auto; margin-right: auto;">
            <form action="{{ route('app.fornecedor.listar') }}" method="post">
                @csrf
                @component('app._components.inputs',['type' => 'text', 'name' => 'nome', 'value' => 'nome', 'placeholder' => 'Nome', 'classe' => 'borda-preta'])

                @endcomponent

                @component('app._components.inputs',['type' => 'text', 'name' => 'site', 'value' => 'site', 'placeholder' => 'Site', 'classe' => 'borda-preta'])

                @endcomponent

                @component('app._components.inputs',['type' => 'text', 'name' => 'uf', 'value' => 'uf', 'placeholder' => 'UF', 'classe' => 'borda-preta'])

                @endcomponent

                @component('app._components.inputs',['type' => 'email', 'name' => 'email', 'value' => 'email', 'placeholder' => 'Email', 'classe' => 'borda-preta'])

                @endcomponent

                @component('app._components.button', ['type' => 'submit', 'classe'=> 'borda-preta', 'texto' => 'Pesquisar'])

                @endcomponent
            </form>
        </div>
    </div>
   </div>
@endsection

