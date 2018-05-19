@extends('layout-padrao')

@section('conteudo')
    <h3 id="titulo-consulta-item-reserva">Informe o número da reserva</h3>
    <form id ="form-reserva" method="get" action="{{route('exibe-item-reserva')}}">
        Número da reserva:
        <input type="text" name="num_reserva">
        <button type="submit"> OK</button>
    </form>
@endsection