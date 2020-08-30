@extends('layouts.auth.template')
@section('forms')

        <h1 class="c-naranja titulo-login">Crea una cuenta</h1>

<div class="form-login">
<form>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text icon" id="basic-addon1"><i class="fas fa-at" aria-hidden="true"></i></span>
  </div>
  <input type="email" class="form-control input-farm" id="email" aria-describedby="emailHelp" placeholder="Correo Eletrónico">
</div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text icon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
  </div>
  <input type="text" class="form-control input-farm" id="" aria-describedby="" placeholder="Nombre Completo">
</div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text icon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
  </div>
  <input type="password" class="form-control input-farm" id="password" aria-describedby="" placeholder="Contraseña">
</div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text icon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
  </div>
  <input type="password" class="form-control input-farm" id="password2" aria-describedby="" placeholder="Confirmar Contraseña">
</div>

<p class="privacidad c-azul">Al crear una cuenta, aceptas las <a href=""class="c-naranja"><strong>Condiciones de Uso</strong></a> y el <a href=""class="c-naranja"><strong>Aviso de Privacidad de Farmaenvios</strong>.</p>

  <a type="button" class="btn btn-block btn-farm bg-azul">Registrar</a>
</form>

    </div>

@endsection