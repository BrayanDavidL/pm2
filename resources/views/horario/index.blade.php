@extends('layouts.app')

@section('content')

<div class="container">
    <div id="horario">
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#horario">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="horario" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="">
                <div class="form-group">
                  <label for="title">Agregar Hora</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                    <div class="form-group">
                      <label for="">Descripcion</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection