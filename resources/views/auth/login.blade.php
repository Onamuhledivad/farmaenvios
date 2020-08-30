@extends('layouts.auth.template')
@section('forms')
        
        <h1 class="c-azul titulo-login">Bienvenido</h1>

<div class="form-login">
<form>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text icon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
  </div>
  <input type="email" class="form-control input-farm" id="email" aria-describedby="emailHelp" placeholder="Correo Eletrónico">
</div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text icon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
  </div>
  <input type="password" class="form-control input-farm" id="password" aria-describedby="" placeholder="Contraseña">
</div>

  <a type="button" class="btn btn-block btn-farm bg-azul">Iniciar Sesión</a>
</form>
<a href="recuperar-contraseña" class="recordar c-naranja">¿Olvidaste tu contraseña?</a>
<div class="crea">¿No Tienes Una Cuenta? <a href="registro"class="c-azul"><strong>Crea Una Cuenta</strong></a></div>
    </div>

@endsection