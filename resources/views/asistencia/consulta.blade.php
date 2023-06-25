@extends('layouts.app')

@section('content')
<style>
    .card {
        display: inline-block; /* Permite que la tarjeta se ajuste automáticamente al contenido */
        border: 1px solid black; /* Borde de la tarjeta */
        padding: 10px; /* Espaciado interno de la tarjeta */
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card" style=" width: 900px; height: 500px;">
            <br>
            <form action="{{ route('filter') }}" method="GET" >
                <div class="form-group">
                    <label for="fecha">Filtrar por Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $fechaFiltro ?? '' }}">
                </div>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
            <br>
            
            <table class="table table-sm table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Id Usuario</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($asistencias as $asistencia)
    <tr>
        <td>{{ $asistencia->id }}</td>
        <td>{{ $asistencia->estado }}</td>
        <td>{{ $asistencia->fecha }}</td>
        <td>{{ $asistencia->id_usuario }}</td>
        
        @foreach ($aprendices as $aprendiz)
            @if ($asistencia->id_usuario == $aprendiz->id)
                <td>{{ $aprendiz->nombre }}</td>
                @break
            @endif
        @endforeach
        
    </tr>
    @endforeach
</tbody>
            </table>
            </div>
        
    </div>
</div>
@endsection
