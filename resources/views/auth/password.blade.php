@extends('layouts.auth.template')
@section('forms')

    
        <h1 class="c-naranja titulo-login">Restablecimiento de contraseña</h1>
      
      <div class="form-login">
<form>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text icon" id="basic-addon1"><i class="fas fa-at" aria-hidden="true"></i></span>
  </div>
  <input type="email" class="form-control input-farm" id="email" aria-describedby="emailHelp" placeholder="Correo Eletrónico">
</div>
  <a type="button" class="btn btn-block btn-farm bg-azul">Recuperar</a>
</form>

    </div>

@endsection