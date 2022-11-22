<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    @component('site.layouts._partials.inputs',
        ['type' => 'text', 'name' => 'nome', 'value' => 'nome', 'placeholder' => 'Nome', 'classe' => $classe])
    @endcomponent
    @component('site.layouts._partials.mensagem', ['campo' => 'nome'])
    @endcomponent

    @component('site.layouts._partials.inputs',
        ['type' => 'text', 'name' => 'telefone', 'value' => 'telefone', 'placeholder' => 'Telefone', 'classe' => $classe])
    @endcomponent
    @component('site.layouts._partials.mensagem', ['campo' => 'telefone'])
    @endcomponent

    @component('site.layouts._partials.inputs',
        ['type' => 'text', 'name' => 'email', 'value' => 'email', 'placeholder' => 'E-mail', 'classe' => $classe])
    @endcomponent
    @component('site.layouts._partials.mensagem', ['campo' => 'email'])
    @endcomponent

    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="0">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos_id as $item)
            <option value="{{ $item->id }}" {{ old('motivo_contatos_id') == $item->id ? 'selected' : '' }}>
                {{ $item->motivo_contato }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}" @component('site.layouts._partials.borda', ['campo' => 'mensagem']) @endcomponent>{{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    @component('site.layouts._partials.mensagem', ['campo' => 'mensagem'])
    @endcomponent
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
@include('site.layouts._partials.alertas')
