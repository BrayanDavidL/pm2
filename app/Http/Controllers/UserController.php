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
    public function redirigirAVista()
    {   
        $users = User::all();
        $cursos = Curso::all();
        return view('instructores.register', ['users' => $users, 'cursos' => $cursos]);
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
    $request->validate([
        'nombre' => 'required',
        'documento' => 'required',
        'telefono' => 'required',
        'correo' => 'required',
        'contraseña' => 'required',
        'Genero' => 'required',
        'Direccion' => 'required',
        'Nacimiento' => 'required',
    ]);

    $usuario = new User;
    $usuario->name = $request->input('nombre');
    $usuario->document_number = $request->input('documento');
    $usuario->telephone = $request->input('telefono');
    $usuario->email = $request->input('correo');
    $usuario->password = bcrypt($request->input('contraseña'));
    $usuario->male = $request->input('Genero');
    $usuario->address = $request->input('Direccion');
    $usuario->age = $request->input('Nacimiento');
    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente');
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
