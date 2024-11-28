<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuadraticaController extends Controller
{
    // Mostrar el formulario
    public function create()
    {
        return view('cuadratica'); // Suponiendo que tu vista se llama "cuadratica.blade.php"
    }

    // Procesar el formulario y calcular la fórmula cuadrática
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        // Recoger los valores de a, b y c
        $a = $validated['a'];
        $b = $validated['b'];
        $c = $validated['c'];

        // Lógica para calcular la fórmula cuadrática: (-b ± √(b² - 4ac)) / 2a
        $discriminante = ($b * $b) - (4 * $a * $c);

        if ($discriminante < 0) {
            $resultados = "La ecuación no tiene soluciones reales.";
        } else {
            $raizDiscriminante = sqrt($discriminante);
            $x1 = (-$b + $raizDiscriminante) / (2 * $a);
            $x2 = (-$b - $raizDiscriminante) / (2 * $a);
            $resultados = "Las soluciones son: x1 = $x1, x2 = $x2";
        }

        // Retornar la vista con los resultados
        return view('cuadratica', compact('resultados'));
    }
}
