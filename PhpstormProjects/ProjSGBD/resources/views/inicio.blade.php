{{--<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Locadora SGBD</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Seja bem-vindo!</h1>
<nav id="menu_inicio">
    <p>Serviços disponíveis</p>
    <a href="{{route('registra-reserva')}}">Efetuar reserva</a><br/>
    <a href="{{route('consulta-reserva')}}">Consultar reservas</a><br/>
    <a href="{{route('inclui-item-reserva')}}">Incluir item em reservas</a><br/>
    <a href="{{route('consulta-item-reserva')}}">Consultar itens de uma reserva</a><br/>
</nav>
</body>
</html>--}}

@extends('layout-padrao')

@section('conteudo')
    @parent
    <nav id="menu_inicio">
        <p>Serviços disponíveis</p>
        <a href="{{route('registra-reserva')}}">Efetuar reserva</a><br/>
        <a href="{{route('consulta-reserva')}}">Consultar reservas</a><br/>
        <a href="{{route('inclui-item-reserva')}}">Incluir item em reservas</a><br/>
        <a href="{{route('consulta-item-reserva')}}">Consultar itens de uma reserva</a><br/>
    </nav>
@endsection