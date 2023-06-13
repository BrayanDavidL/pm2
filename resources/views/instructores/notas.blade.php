@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            <div class="row justify-content">
    <div class="col-md-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Aprendiz</th>
                    <th scope="col">Nota 1</th>
                    <th scope="col">Nota 2</th>
                    <th scope="col">Nota 3</th>
                    <th scope="col">Promedio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprentice as $instructor)
                <tr>
                    <td scope="row">{{ $instructor->id }}</td>
                    @foreach ($users as $aprendiz)
                        @if ($instructor->user_id == $aprendiz->id)
                            <td>{{ $aprendiz->name }}</td>
                            @break
                        @endif
                    @endforeach
                    @foreach ($cursos as $curso)
                        @if ($instructor->curso_id == $curso->id)
                            <td>
                                <input type="number" name="nota1" value="{{ $instructor->nota1 }}" placeholder="Nota 1">
                            </td>
                            <td>
                                <input type="number" name="nota2" value="{{ $instructor->nota2 }}" placeholder="Nota 2">
                            </td>
                            <td>
                                <input type="number" name="nota3" value="{{ $instructor->nota3 }}" placeholder="Nota 3">
                            </td>
                            @break
                        @endif
                    @endforeach
                    <td>
                        @php
                        $promedio = ($instructor->nota1 + $instructor->nota2 + $instructor->nota3) / 3;
                        echo number_format($promedio, 2);
                        @endphp
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
        </div>
    </div>
</div>
@endsection
