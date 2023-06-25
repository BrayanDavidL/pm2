@extends('layouts.app')

@section('content')
<style>
    .card {
        display: inline-block; /* Permite que la tarjeta se ajuste automáticamente al contenido */
        border: 1px solid black; /* Borde de la tarjeta */
    }
   
</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 500px; height: 320px;">
            <br>
            <form action="{{ route('apprentice_store')}}" method="POST">
                    @csrf
                    <h2>Registro de Aprendices</h2>
                    <div class="form-group">
                        <label for="usuario">Selecciona Usuario:</label>
                        <select name="usuario" id="usuario" class="form-select" required>
                            <option value=""></option>
                            @foreach($users as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>   
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cursos">Seleccionar curso:</label>
                        <select name="cursos" id="cursos" class="form-select" required>
                            <option value=""></option>
                            @foreach($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->name }}</option>
                            @endforeach
                        </select>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            </div>
    </div>
@endsection