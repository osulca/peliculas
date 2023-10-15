<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function mostrarDireccion(){
        return view('registroDireccion');
    }

    public function guardarDireccion(Request $request){
        $request->validate([
            "direccion" => "required",
            "cliente_id" => "required"
        ]);
        
        $direccion = $request["direccion"];
        $cliente_id = $request["cliente_id"];
        $cliente = Cliente::find($cliente_id);
        $cliente->direccion = $direccion;
        $cliente->save();
        return "Direccion Añadida";
    }
}
