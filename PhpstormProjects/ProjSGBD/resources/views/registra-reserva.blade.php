{{--}}<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Locadora SGBD</title>
    <meta charset="utf-8">
</head>
<body>
<h3>Faça sua reserva</h3>
<form method="post" action="{{route('confirma-reserva')}}">
    ID do cliente:
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="id_cliente">
    Data de retirada:
    <input type="date" name="dt_ini">
    Data de devolução:
    <input type="date" name="dt_fim">
    <button type="submit"> Registrar</button>
</form>
</body>
</html>--}}

@extends('layout-padrao')

@section('conteudo')
    <h3 id="titulo-form-reserva">Faça sua reserva</h3>
    <form id="form-reserva" method="post" action="{{route('confirma-reserva')}}">
        <label>ID do cliente:</label>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="id_cliente">
        <label>Data de retirada:</label>
        <input type="date" name="dt_ini">
        <label>Data de devolução:</label>
        <input type="date" name="dt_fim">
        <button type="submit"> Registrar</button>
    </form>

@endsection