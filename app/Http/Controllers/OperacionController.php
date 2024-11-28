<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionController extends Controller
{
    public function suma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return view('resultados', compact('resultado'));
    }
    
    public function resta($num1, $num2)
    {
        $resultado = $num1 - $num2;
        return view('resultados', compact('resultado'));
    }
    
    public function multiplicacion($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return view('resultados', compact('resultado'));
    }
    
    public function division($num1, $num2)
    {
        if ($num2 == 0) {
            $resultado = 'No se puede dividir entre cero.';
        } else {
            $resultado = $num1 / $num2;
        }
        return view('resultados', compact('resultado'));
    }
}
