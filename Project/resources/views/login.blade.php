@extends('layouts.layout')
@section('sidebar')
@endsection
@section('header')
@endsection

@section('content')
  <section class="flex">
    <!-- Formulario -->
    <div class="center">
      
      <h5>Inicio de sesión</h5>
      <div class="id-usuario">
        <img class="selected" alt="45px" width="45px" src="img/admin.png" >      
      </div>
      <hr class="featurette-divider">

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Correo</label>
        </div>
        @error('email')
          <small style="color: red">{{$message}}</small>
        @enderror
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Clave</label>
        </div>
        @error('password')
          <small style="color: red">{{$message}}</small>
        @enderror
        <div class="pass"><a href="/security-question">¿Olvido su contraseña? </a></div>
      <div style="align-items: center; justify-content: center; align-content: center; width: 100%; display: flex; flex-direction: row; ">
          <button class="boton-i" type="submit">
              Iniciar
            </button>
      </div>
    </form>
    </div>
  </section>
@endsection