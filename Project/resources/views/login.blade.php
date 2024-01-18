@extends('layouts.layout')


@section('content')
    <!-- Formulario -->
    <div class="center">
      
      <h5>Inicio de sesión</h5>
      <div class="id-usuario" >
        <img class="selected" class="img-user" id="myImage2" src="img/admin.png" >      
      </div>
      
      <hr class="featurette-divider">
      

      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Clave</label>
        </div>
        <div class="pass"><a href="/security-question">¿Olvido su contraseña? </a></div>
      </form>
      <div style="align-items: center; justify-content: center; align-content: center; width: 100%; display: flex; flex-direction: row; ">
        <a href="/home">
          <button class="boton-i">
              Iniciar
            </button>
        </a>
      </div>
    </div>
@endsection