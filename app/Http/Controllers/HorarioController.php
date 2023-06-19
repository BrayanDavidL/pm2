<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Materia;

class HorarioController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        $materias = Materia::all();
        $horarios = Horario::all();

        return view('horario.horario', compact('cursos', 'materias', 'horarios'));
    }

    public function guardar(Request $request)
    {
        // Validar los datos enviados en el formulario
        $request->validate([
            'curso' => 'required',
            'horario' => 'required',
        ]);

        // Obtener el ID del curso seleccionado
        $cursoId = $request->input('curso');

        // Obtener el curso seleccionado
        $curso = Curso::findOrFail($cursoId);

        // Obtener los datos del horario enviado por el formulario
        $horarioData = $request->input('horario');

        // Iterar sobre los datos del horario
        foreach ($horarioData as $hora => $dias) {
            foreach ($dias as $dia => $materia) {
                // Crear o actualizar una entrada en la base de datos para cada hora y día
                $horario = Horario::updateOrCreate(
                    ['curso_id' => $cursoId, 'hora' => $hora],
                    [$dia => $materia]
                );
            }
        }

        // Realizar cualquier otra lógica adicional o redireccionar a una vista
        return redirect()->back()->with('success', 'Horario guardado exitosamente.');
    }

    public function agregar(Request $request){
        $horarios = $request->input('horarios');
    
        foreach ($horarios as $hora => $dias) {
            foreach ($dias as $dia => $materiaId) {
                // Guardar los datos en la base de datos
                // Por ejemplo, puedes crear un nuevo registro en la tabla de horarios con los datos recibidos
                Horario::create([
                    'hora' => $hora,
                    'dia' => $dia,
                    'materia_id' => $materiaId,
                ]);
            }
        }
    
        // Redireccionar a la página de horarios o mostrar un mensaje de éxito
        return redirect()->route('horario.index')->with('success', 'Horarios agregados correctamente');
    }
}