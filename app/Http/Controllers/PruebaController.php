<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;


class PruebaController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $prueba = Prueba::all();
        return view('prueba.index', compact('prueba'));
    }

    // Mostrar el formulario para crear un nuevo registro
    public function create()
    {
        return view('prueba.create');
    }

    // Guardar el nuevo registro
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        // Crear el registro
        Prueba::create($request->all());

        return redirect()->route('prueba.index');
    }

    // Mostrar un solo registro
    public function show($id)
    {
        $prueba = Prueba::findOrFail($id);
        return view('prueba.show', compact('prueba'));
    }

    // Mostrar el formulario para editar un registro
    public function edit($id)
    {
        $prueba = Prueba::findOrFail($id);
        return view('prueba.edit', compact('prueba'));
    }

    // Actualizar un registro
    public function update(Request $request, $id)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        $prueba = Prueba::findOrFail($id);
        $prueba->update($request->all());

        return redirect()->route('prueba.index');
    }

    // Eliminar un registro
    public function destroy($id)
    {
        $prueba = Prueba::findOrFail($id);
        $prueba->delete();

        return redirect()->route('prueba.index');
    }
}

/**
 * (1) primero creo controlador con su logica index ,create ects 
 * 
 */