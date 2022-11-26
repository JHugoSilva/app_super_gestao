@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('site.layouts._components.login', ['classe' => 'borda-preta'])

                @endcomponent
                {{ isset($erro) && !empty($erro) ? $erro : '' }}
            </div>
        </div>
    </div>


@endsection
