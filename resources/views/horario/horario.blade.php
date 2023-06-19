@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('horario.agregar') }}" method="GET">
        @csrf
        <div id="horario">
            <table class="table">
                <thead>
                    <tr>
                        <th>HORA</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horarios as $horario)
                    <tr>
                        <td>{{ $horario->hora }}</td>
                        <td>
                            <select name="horarios[{{ $horario->hora }}][lunes]" class="form-control">
                                <option value="">Seleccione una materia</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="horarios[{{ $horario->hora }}][martes]" class="form-control">
                                <option value="">Seleccione una materia</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="horarios[{{ $horario->hora }}][miercoles]" class="form-control">
                                <option value="">Seleccione una materia</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="horarios[{{ $horario->hora }}][jueves]" class="form-control">
                                <option value="">Seleccione una materia</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="horarios[{{ $horario->hora }}][viernes]" class="form-control">
                                <option value="">Seleccione una materia</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Horarios</button>
    </form>
</div>
@endsection
