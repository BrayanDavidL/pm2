<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Apprentice;
use App\Models\Curso;
use App\Models\User;
use App\Models\Subjects;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function redirigirAVistaScore()
    {   
        $users = User::all();
        $cursos = Curso::all();
        $subjects = Subjects::all();
        $apprentices = Apprentice::all();
       return view('instructores.notas',['users'=>$users,'cursos'=>$cursos,'apprentices' => $apprentices,'subjects'=>$subjects]);
    }
    
    public function store(Request $request)
    {
        $usuarioId = $request->input('usuarioId');   
        $notas1 = $request->input('nota1');
        $notas2 = $request->input('nota2');
        $notas3 = $request->input('nota3');
        $promedios = $request->input('promedio');
        $subject = $request->input('materia');
    
        // Validar los datos ingresados si es necesario
        // ...
    
        foreach ($notas1 as $index => $nota1) {
            $score = new Score();
            $score->note1 = $nota1;
            $score->note2 = $notas2[$index];
            $score->note3 = $notas3[$index];
            $score->average = $promedios[$index];
            $score->apprentice_id = $usuarioId;
            $score->subject_id = $subject;
            $score->save();
        }
    
        // Otras operaciones o redireccionamiento después de guardar los datos
    
        return redirect()->back()->with('success', 'Datos guardados exitosamente');
    }
    
    
    
    


    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}
