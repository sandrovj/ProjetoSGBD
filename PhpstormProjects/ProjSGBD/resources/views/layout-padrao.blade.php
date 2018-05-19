<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Locadora SGBD</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}" type="text/css">
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <h1><a href="{{route('inicio')}}">Locadora SGBG</a></h1>
        </header>
        <main>
            @section('conteudo')
                @show
        </main>
        <footer></footer>
    </div>
</body>
</html>