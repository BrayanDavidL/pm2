@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('horario.agregar') }}" method="GET">
        @csrf
        <div class="mb-3">
            <label for="curso" class="form-label">Seleccione un curso:</label>
            <select name="curso" id="curso" class="form-control">
                <option value="">Seleccione un curso</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            </select>
        </div>

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
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->nombre }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="horarios[{{ $horario->hora }}][martes]" class="form-control">
                                    <option value="">Seleccione una materia</option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->nombre }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="horarios[{{ $horario->hora }}][miercoles]" class="form-control">
                                    <option value="">Seleccione una materia</option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->nombre }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="horarios[{{ $horario->hora }}][jueves]" class="form-control">
                                    <option value="">Seleccione una materia</option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->nombre }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="horarios[{{ $horario->hora }}][viernes]" class="form-control">
                                    <option value="">Seleccione una materia</option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->nombre }}</option>
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
