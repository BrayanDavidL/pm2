@extends('layouts.app')

@section('content')
<div class="container">
        <a href="{{ action('App\Http\Controllers\ApprenticeController@redirigirAVista') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </a>
        <a href="{{ action('App\Http\Controllers\ApprenticeController@redirigirAVistaScore') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
            </svg>
        </a>
    <div class="row justify-content-center">
        <div class="col-md-8">
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
