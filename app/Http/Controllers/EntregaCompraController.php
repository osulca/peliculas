<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\EntregaCompra;

class EntregaCompraController extends Controller
{
    public function formularioCompra(){
        if(!Auth::check()){
            return redirect(Route('login'));
        }else{
            return view('registroCompra');
        }
    }

    public function guardarCompra(Request $request){
        $ec = new EntregaCompra();
        $ec->descripcion = $request["descripcion"];;
        $ec->peso = $request["peso"];
        $ec->seguimiento = $this->generarTracking(8,12);
        $ec->cliente_id = $request["cliente_id"];
        $ec->save();
        return "Compra guardada";
    }

    public function generarTracking($min, $max){
        $float_part = mt_rand(0, mt_getrandmax())/mt_getrandmax();
        $integer_part = mt_rand($min, $max - 1);
        return $integer_part + $float_part;
    }
}
