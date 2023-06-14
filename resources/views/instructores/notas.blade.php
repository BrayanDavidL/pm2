@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <form action="{{ route('scores_store') }}" method="POST">
        <select name="materia" id="materia">
             <option value="" disabled selected>Selecciona una Materia</option>
                @foreach ( $subjects as $subject )
                     <option value="{{ $subject->id}}">{{$subject->nombre}}</option>
                @endforeach
                </select>
            <div class="card">
                @csrf
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="row">#</th>
                                <th></th>
                                <th>Aprendiz</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Nota 3</th>
                                <th>Promedio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($apprentices as $index => $apprentice)
                            <tr>
                                <td scope="row">{{ $index + 1 }}</td>
                                <td><Input  type="hidden" name="usuarioId" value="{{$apprentice->id}}" ></td>
                                @foreach ($users as $user)
                                    @if ($apprentice->user_id == $user->id)
                                   
                                        <td>{{ $user->name }}</td>
                                        @break
                                    @endif
                                @endforeach
                                <td>
                                    <input type="number" class="nota" name="nota1[]" value="{{ old('nota1.'.$index) }}" oninput="calcularPromedio(this)">
                                </td>
                                <td>
                                    <input type="number" class="nota" name="nota2[]" value="{{ old('nota2.'.$index) }}" oninput="calcularPromedio(this)">
                                </td>
                                <td>
                                    <input type="number" class="nota" name="nota3[]" value="{{ old('nota3.'.$index) }}" oninput="calcularPromedio(this)">
                                </td>
                                <td>
                                    <input type="number" class="promedio" name="promedio[]" value="{{ old('promedio.'.$index) }}" style="width: 30%" readonly>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button scope="row" type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function calcularPromedio(input) {
        var row = input.closest('tr');
        var notas = row.getElementsByClassName('nota');
        var promedioInput = row.getElementsByClassName('promedio')[0];

        var suma = 0;
        var contador = 0;

        for (var i = 0; i < notas.length; i++) {
            var nota = parseFloat(notas[i].value);
            if (!isNaN(nota)) {
                suma += nota;
                contador++;
            }
        }

        if (contador > 0) {
            var promedio = suma / contador;
            promedioInput.value = promedio.toFixed(1);
        } else {
            promedioInput.value = '';
        }
    }
</script>

@endsection
