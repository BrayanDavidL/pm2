<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tipo_Asistencia;
class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index',['usuarios'=>$usuarios]);
    }
    
    public function materias()
    {
        $usuarios = User::all();
        $tipoasistencia = Tipo_Asistencia::all();
        return view('instructores.materias',['usuarios'=>$usuarios, 'tipoasistencia' => $tipoasistencia]);
    }
    public function json(){
      
            $usuarios = User::all();
            return response()->json($usuarios);
  
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
