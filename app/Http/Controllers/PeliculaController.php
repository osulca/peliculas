<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function show(){
        $peliculas = Pelicula::get();
        return view("listarPeliculas")
                   ->with("peliculas", $peliculas);
    }

    public function peliculaPorId(int $id){
        $pelicula = Pelicula::find($id);
        return view("mostrarPelicula")
                   ->with("pelicula", $pelicula);
    }

    public function mostrarApi(){
        $peliculas = Pelicula::get();
        return response($peliculas, 200);
    }


    public function guardarApi(Request $request){
        try{
            $pelicula = new Pelicula();
            $pelicula->titulo = $request->input("titulo");
            $pelicula->genero = $request->input("genero");
            $pelicula->año = $request->input("año");
            $pelicula->descripcion = $request->input("descripcion");        
            $pelicula->poster = $request->input("poster");
            $pelicula->save();
            $respuesta = array(
                "status"=>"ok",
                "mensaje"=>"registro guardado"
            );
            $codigo = 200;
        }catch(\Exception $e){
            $respuesta = array(
                "status"=>"error",
                "mensaje"=>$e->getMessage()
            );
            $codigo = 400;
        }
        
        return response($respuesta, $codigo);
    }
}
