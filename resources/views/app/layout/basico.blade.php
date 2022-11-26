<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - {{ $titulo }}</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
</head>

<body>
    @include('app.layout._partials.topo')
        @yield('conteudo')
    @include('app.layout._partials.rodape')
</body>

</html>
