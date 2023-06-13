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
                    <th scope="col"><select name="" id="">
                        <option value=""></option>
                        lect>
                        @foreach ( $activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                    @endforeach
                    </select></th>
                    <th scope="col"><select name="" id="">
                        <option value=""></option>
                        lect>
                        @foreach ( $activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                    @endforeach
                    </select></th>
                    <th scope="col"><select name="" id="">
                        <option value=""></option>
                        lect>
                        @foreach ( $activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                    @endforeach
                    </select></th>
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
                                <input type="number" id="nota1" name="nota1" value="{{ $instructor->nota1 }}" oninput="calcular()" placeholder="Nota 1">
                            </td>
                            <td>
                                <input type="number" id="nota2" name="nota2" value="{{ $instructor->nota2 }}" oninput="calcular()" placeholder="Nota 2">
                            </td>
                            <td>
                                <input type="number" id="nota3" name="nota3" value="{{ $instructor->nota3 }}" oninput="calcular()" placeholder="Nota 3">
                            </td>
                            <td>
                                <input type="number" id="total" name="total" style="width: 70%" readOnly>
                            </td>
                            @break
                        @endif
                    @endforeach
                    <td>
                    <script type="text/javascript">
                        tol.readOnly = true;
                            function calcular(){
                                try {
                                    var a = parseFloat(document.getElementById("nota1").value);
                                    var b = parseFloat(document.getElementById("nota2").value);
                                    var c = parseFloat(document.getElementById("nota3").value);

                                    var promedio = (a + b + c) / 3;

                                    document.getElementById("total").value = promedio.toFixed(1);
                                }catch (e) {}

                    }
                </script>
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
