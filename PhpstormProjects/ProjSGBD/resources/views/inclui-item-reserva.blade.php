@extends('layout-padrao')

@section('conteudo')
    <h3 id="titulo-form-item-reserva">Incluir item na reserva</h3>
    <form id="inclui-item-reserva" method="get" action="{{route('registra-item-reserva')}}">
        <label>Número da reserva:</label>
        <input type="text" name="num_reserva"><br>
        <label>Placa do veículo:</label>
        <input type="text" name="placa_veiculo"><br>
        <label>ID da taxa:</label>
        <input type="text" name="id_taxa"><br>
        <label>Valor:</label>
        <input type="text" name="valor"><br>
        <button type="submit"> Registrar</button>
    </form>
@endsection