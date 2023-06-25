@extends('layouts.app')

@section('content')
<!-- styles cards -->

<script src="https://kit.fontawesome.com/bb04f714eb.js" crossorigin="anonymous"></script>
<style>
    .card {
  box-sizing: border-box;
  width: 190px;
  height: 254px;
  background: #;
  border: 1px solid white;
  box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
  backdrop-filter: blur(6px);
  border-radius: 17px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  font-weight: bolder;
  color: black;
}

.card:hover {
  border: 1px solid black;
  transform: scale(1.05);
}

.card:active {
  transform: scale(0.95) rotateZ(1.7deg);
}

</style>
<!-- /styles cards -->

<!-- cards -->

<div class="container text-center">
  <div class="row">

  <!-- card Asistencia -->
    <div class="col">
        <a id="a"href="{{ url('asistencia')}}" style="text-decoration: none;">
          <div class="card" style=" width:290px; height: 270px;">
            <img src="../img/attendance.png" style="width: 115px; height: 90px;" alt="login form" class="img-fluid" />
              <br>
              <center>
                CONSULTAR ASISTENCIA
              </center>
          </div>
        </a>
    </div>
  <!-- /card Asistencia -->

  <!-- card instructor -->
  <div class="col">
        <a id="a"href="{{ url('instructor')}}" style="text-decoration: none;">
          <div class="card" style=" width:290px; height: 270px;">
            <img src="../img/ins.png" style="width: 115px; height: 90px;" alt="login form" class="img-fluid" />
              <br>
              <center>
                AGREGAR INSTRUCTORES
              </center>
          </div>
        </a>
    </div>
  <!-- /card instructor -->

  <!-- card Aprendices-->
    <div class="col">
        <a id="a"href="{{ url('apprentice')}}" style="text-decoration: none;">
          <div class="card" style=" width:290px; height: 270px;">
            <img src="../img/app.png" style="width: 115px; height: 90px;" alt="login form" class="img-fluid" />
              <br>
              <center>
                AGREGAR APRENDICES
              </center>
          </div>
        </a>
    </div>
  <!-- /card Aprendices -->
  
</div><!-- /row -->

<br>
<br>

  <div class="row">

    <!-- card registro de notas -->
    <div class="col">
          <a id="a"href="{{ url('vista_register_score')}}" style="text-decoration: none;">
            <div class="card" style=" width:290px; height: 270px;">
              <img src="../img/notas.png" style="width: 115px; height: 90px;" alt="login form" class="img-fluid" />
                <br>
                <center>
                  REGISTRO DE NOTAS
                </center>
            </div>
          </a>
    </div>
    <!-- /card registro de notas -->

    <!-- card consulta de usuario -->
    <div class="col">
          <a id="a"href="{{ url('vista_consulta_usuario')}}" style="text-decoration: none;">
            <div class="card" style=" width:290px; height: 270px;">
              <img src="../img/consulta.png" style="width: 115px; height: 90px;" alt="login form" class="img-fluid" />
                <br>
                <center>
                CONSULTAR USUARIOS
                </center>
            </div>
          </a>
    </div>
    <!-- /card consulta de usuario-->

     <!-- card Creditos -->
     <div class="col">
          <a id="a"href="{{ url('credits')}}" style="text-decoration: none;">
            <div class="card" style=" width:290px; height: 270px;">
              <img src="../img/reconocimientos.png" style="width: 115px; height: 90px;" alt="login form" class="img-fluid" />
                <br>
                <center>
                CREDITOS
                </center>
            </div>
          </a>
    </div>
    <!-- /card creditos-->


  </div><!-- /row -->
</div><!-- /container -->

@endsection
