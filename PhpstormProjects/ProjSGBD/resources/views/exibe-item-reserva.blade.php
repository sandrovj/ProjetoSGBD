@extends('layout-padrao')

@section('conteudo')
    <table id="tabela-reservas">
        <tr>
            <th>Número da reserva</th>
            <th>Taxa</th>
            <th>Valor</th>
            <th>Descrição</th>
        </tr>
        @foreach($item_reserva as $item)
            <tr>
                <td>{{$item->RESERVA_NUM_RESERVA}}</td>
                <td>{{$item->NOME}}
                <td>{{$item->VALOR}}</td>
                <td>{{$item->DESCRICAO}}</td>
            </tr>
        @endforeach
    </table>
@endsection