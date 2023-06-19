<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view('materia.index', compact('materias'));
    }

    public function crear(Request $request)
    {
        // Validar los datos enviados en el formulario
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
        ]);

        // Crear una nueva instancia de Materia y asignar los valores recibidos
        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->codigo = $request->codigo;
        // Otros campos de la materia...

        // Guardar la materia en la base de datos
        $materia->save();

        // Redireccionar a la página de materias o mostrar un mensaje de éxito
        return redirect()->route('materia.index')->with('success', 'Materia creada exitosamente.');
    }
}