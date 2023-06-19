<form action="{{ route('horario.guardar') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="hora">Hora</label>
        <input type="text" class="form-control" name="hora" id="hora">
    </div>

    <div class="form-group">
        <label for="materia">Materia</label>
        <select class="form-control" name="materia" id="materia">
            @foreach ($materias as $materia)
                <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="curso">Curso</label>
        <select class="form-control" name="curso" id="curso">
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
            @endforeach
        </select>
    </div>

    <!-- Otros campos del formulario -->

    <button type="submit" class="btn btn-primary">Guardar
