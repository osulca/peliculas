<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PaisController extends Controller
{
    public function getDatosPais(String $pais){
        $url = "https://restcountries.com/v3.1/name/".$pais;
        $cliente = new Client();
        $res = $cliente->request('GET', $url);
        $body = json_decode($res->getBody(), true);
        return view("paisesMostrar")
                ->with("datos", $body);
    }
}
