<h3>Fornecedores</h3>
{{--
    @dd($fornecedores)
    --}}

<p>Fornecedor: {{ $fornecedores['nome'] }}</p>
<p>Status: {{ $fornecedores['status'] }}</p>

<br>

@if ($fornecedores['status'] == 'N')
    <p>Fornecedor Inatívo</p>
@endif

<br>

@if (!($fornecedores['status'] == 'S'))
    <p>Fornecedor Inatívo (False)</p>
@endif
<br>

@unless ($fornecedores['status'] == 'S')
<p>Fornecedor Inatívo (UnLess)</p>

@endunless

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem v�rios fornecedores cadastrados</h3>
@else
    <h3>Ainda n�o existem alguns fornecedores cadastrados</h3>
@endif
{{--App Fornecedores--}}

