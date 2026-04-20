<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlBienvenida extends Controller
{
    //
    public function Bienvenidos(){
        return view('welcome');
    }

    //Hacer una suma con un metodo y devolver una variable con el resultado
    public function suma(){
        return (1+3);
    }

    public function DatosSuma($num1){
        //obtener datos de la url
        return ($num1);
    }

    public function DatosSuma_2($num1,$num2){
        $suma = $num1 + $num2;
        return "La suma de $num1 y $num2 es: $suma";
    }


    //suma 3
    public function DatosSuma_3($num1,$num2,$num3){
        $suma = $num1 + $num2 + $num3;
        $resultado = "La suma de $num1, $num2 y $num3 es: $suma";

        //mostar datos en la vista welcome
        return view('welcome', compact('num1', 'num2', 'num3', 'suma'));
    }
}

