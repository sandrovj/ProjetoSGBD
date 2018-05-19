@extends('layout-padrao')

@section('conteudo')
    <table id="tabela-reservas">
        <tr>
            <th>Nome do cliente</th>
            <th>Email do cliente</th>
            <th>Número da reserva</th>
            <th>Data de início</th>
            <th>Data de fim</th>
            <th>Marca</th>
            <th>Modelo do veículo</th>
        </tr>
        @foreach($reservas as $reserva)
            <tr>
                <td>{{$reserva->NOME}}</td>
                <td>{{$reserva->EMAIL}}
                <td>{{$reserva->NUM_RESERVA}}</td>
                <td>{{$reserva->INICIO}}</td>
                <td>{{$reserva->FIM}}</td>
                <td>{{$reserva->MARCA}}</td>
                <td>{{$reserva->MODELO}}</td>
            </tr>
        @endforeach
    </table>
@endsection