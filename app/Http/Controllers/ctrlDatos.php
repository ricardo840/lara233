<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class ctrlDatos extends Controller
{
    //

    public function AccesoDatosVista(){
        $pro = Product::all();
        return view('vistadatos')->with(compact('pro'));
    }

    public function AccesoPokemonVista(){

    $enlace = Http::get('https://pokemondb.net/json/pokedex')->json();
        return view('vistaPokemon')->with(compact('enlace'));

    }


    
    public function AccesoHostingVista(){

    $enlace = Http::get('https://linorbl.netlify.app/json/pokedex.json')->json();
    
        return view('vistaHosting')->with(compact('enlace'));

    }

    public function AccesoPokemonDetallesVista($id){

        $enlace = Http::get('https://linorbl.netlify.app/json/pokedex.json')->json();
        $detalle = collect($enlace)->firstWhere('id', (int) $id);

        if (!$detalle) {
            abort(404, 'Pokemon no encontrado');
        }

        return view('vistaPokemonDetalles')->with(compact('detalle'));

    }
}




