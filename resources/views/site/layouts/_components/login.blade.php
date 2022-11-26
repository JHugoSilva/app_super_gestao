<form action="{{ route('site.login') }}" method="POST">
    @csrf
    @component('site.layouts._partials.inputs',
        ['type' => 'text', 'name' => 'email', 'value' => 'email', 'placeholder' => 'E-mail', 'classe' => $classe])
    @endcomponent
    @component('site.layouts._partials.mensagem', ['campo' => 'email'])
    @endcomponent

    @component('site.layouts._partials.inputs',
    ['type' => 'password', 'name' => 'password', 'value' => 'password', 'placeholder' => 'Senha', 'classe' => $classe])
    @endcomponent
    @component('site.layouts._partials.mensagem', ['campo' => 'senha'])
    @endcomponent

    <button type="submit" class="{{ $classe }}">Entrar</button>
</form>
@include('site.layouts._partials.alertas')
