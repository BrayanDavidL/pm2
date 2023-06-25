@extends('layouts.app')

@section('content')
<div class="container">
        <a href="{{ action('App\Http\Controllers\ApprenticeController@redirigirAVista') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </a>
        <style>
    .card {
        display: inline-block; /* Permite que la tarjeta se ajuste automáticamente al contenido */
        border: 1px solid black; /* Borde de la tarjeta */
        padding: 10px; /* Espaciado interno de la tarjeta */
    }
</style>
       
    <div class="row justify-content-center">
        <div class="card" style="width: 900px; height: 400px;">
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Aprendiz</th>
                    <th scope="col">Curso</th>
                    </tr>
                </thead>
                @foreach ($apprentice as $instructor)
                <tbody>  
                    <td scope="row">{{ $instructor->id}}</td>
                    @foreach ($users as $aprendiz)
                        @if ($instructor->user_id == $aprendiz->id)
                            <td>{{ $aprendiz->name }}</td>
                        @break
                        @endif
                    @endforeach
                    @foreach ($cursos as $curso)
                        @if ($instructor->curso_id == $curso->id)
                            <td>{{ $curso->name }}</td>
                            @break
                        @endif
                    @endforeach
                </tbody>
                @endforeach
                </table>
            </div>
        </div>
        </div>  
</div>
@endsection