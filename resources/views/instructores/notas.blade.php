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
            <div class="card" style="width: 1200px; height: 600px;">
            <form action="{{ route('scores_store') }}" method="POST">
                <hr>
                <select name="materia" id="materia">
                    <option value="" disabled selected>Selecciona una Materia</option>
                    @foreach ( $subjects as $subject )
                    <option value="{{ $subject->id}}">{{$subject->nombre}}</option>
                    @endforeach
                </select>
                <br>
                <hr>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="row">#</th>
                            <th>Aprendiz</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Nota 3</th>
                            <th>Promedio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apprentices as $apprentice)
                        <tr>
                            <input type="hidden" name="usuarioId" value="{{$apprentice->id}}">
                            <td>{{$apprentice->id}}</td>
                            @foreach ($users as $user)
                            @if ($apprentice->user_id == $user->id)
                            <td>{{ $user->name }}</td>
                            <input type="hidden" name="documento" value="{{ $user->document_number}}" style="width: 30%" readonly>
                            @break
                            @endif
                            @endforeach
                            <td>
                                <input type="number" class="nota" name="nota1" value="" oninput="calcularPromedio(this)">
                            </td>
                            <td>
                                <input type="number" class="nota" name="nota2" value="" oninput="calcularPromedio(this)">
                            </td>
                            <td>
                                <input type="number" class="nota" name="nota3" value="" oninput="calcularPromedio(this)">
                            </td>
                            <td>
                                <input type="number" class="promedio" name="promedio" value="" style="width: 30%" readonly>
                            </td>
                            <td><button type="submit" class="btn btn-primary">Guardar</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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