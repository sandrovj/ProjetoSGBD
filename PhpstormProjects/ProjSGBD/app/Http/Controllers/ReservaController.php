<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{

    public function registra(Request $request){

        DB::table('reserva')->insert(
            ['DT_INICIO'=>$request->get('dt_ini'),'DT_FIM'=>$request->get('dt_fim'),'CLIENTE_ID_CLIENTE'=>$request->get('id_cliente')]
        );

        $reservas = DB::table('dados_reservas')->get();
        return view('consulta-reserva',['reservas'=>$reservas]);
    }

    public function consulta(){

        #$reservas = DB::table('reserva')
        #    ->orderBy('DT_INICIO')
        #    ->join('cliente','reserva.CLIENTE_ID_CLIENTE','=','cliente.ID_CLIENTE')
        #    ->get();

        #utiliza a view SQL "dados_reservas" para realizar a junção dos dados
        $reservas = DB::table('dados_reservas')->get();
        return view('consulta-reserva',['reservas'=>$reservas]);

        #return view('consulta-reserva');
    }

    public function inclui_item(Request $request){
        DB::table('item_reserva')
            ->insert(
                ['RESERVA_NUM_RESERVA'=>$request->get('num_reserva'),
                'VEICULO_PLACA'=>$request->get('placa_veiculo'),
                'TAXAS_ID_TAXA'=>$request->get('id_taxa'),
                'VALOR'=>$request->get('valor')]
            );

        $item_reserva = DB::table('item_reserva')
            ->join('taxas','item_reserva.TAXAS_ID_TAXA','=','taxas.ID_TAXA')
            ->where('RESERVA_NUM_RESERVA','=',$request->get('num_reserva'))
            ->get();
        return view('exibe-item-reserva',['item_reserva'=>$item_reserva]);

    }

    public function exibe_item_reserva(Request $request){
        #$item_reserva = DB::table('item_reserva')
        #    ->where('RESERVA_NUM_RESERVA','=',$request->get('num_reserva'))
        #    ->get();

        $item_reserva = DB::table('item_reserva')
            ->join('taxas','item_reserva.TAXAS_ID_TAXA','=','taxas.ID_TAXA')
            ->where('RESERVA_NUM_RESERVA','=',$request->get('num_reserva'))
            ->get();
        return view('exibe-item-reserva',['item_reserva'=>$item_reserva]);
    }
}
