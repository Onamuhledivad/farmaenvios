<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">
    <meta http-equiv="content-language" content="es">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <title>Farmaenvios | Inicio</title>

    <!-- Styles Gral-->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
     <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Icons -->
    <script src="https://kit.fontawesome.com/0c68a5b572.js" crossorigin="anonymous"></script>

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="sesion-menu">
    <a href="login" class="sesion-text text-dark">Inicia Sesión</a>
    <img src="{{ asset('assets/images/otx.png') }}" alt="OTX" class="sesion-img">
  </div>
</nav>
</header>
<main>
<section class="container">
  <div class="row justify-content-md-center">
    <div class="col-sm-12 col-md-12 col-lg-12">

      <div class="logo-inicio">
        <a href="/"><img src="{{ asset('assets/images/login-logo.png') }}"></a>
      </div>
      <h1 class="c-azul titulo-inicio">Te ofrecemos los mismos ingredientes y contenidos a precios que se adaptan a tu economía</h1>
    </div>
</div>

<div class="row">

<div class="col-sm-12 col-md-5 col-lg-5">
<div class="buscador" style="background-image: url({{ asset('assets/images/bg-buscar.jpg') }});">

<div class="form-buscar">
<div class="input-group mb-3">
  <input type="text" class="form-control buscar-input c-azul" placeholder="Buscar medicamento, producto, sustancia activa" aria-label="" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn bg-naranja btn-buscar" type="button"><i class="fas fa-search"></i></button>
  </div>
</div>
</div>

</div>
</div>

<div class="col-sm-12 col-md-7 col-lg-7">
<div class="row">
  <div class="col-6 col-md-3">
    <div class="categoria">
      <img src="{{ asset('assets/images/inicio-cuidado-personal.png') }}" alt="">
      <div class="cat-text">
        <p>cuidado <br> personal</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="categoria">
      <img src="{{ asset('assets/images/inicio-dolor-e-inflamacion.png') }}" alt="">
      <div class="cat-text">
        <p>Dolor e inflamación</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="categoria">
      <img src="{{ asset('assets/images/inicio-material-medico.png') }}" alt="">
      <div class="cat-text pt-8">
        <p>Material Médico</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="categoria">
      <img src="{{ asset('assets/images/inicio-pediatrico.png') }}" alt="">
      <div class="cat-text pt-8">
        <p>Pediátrico</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="categoria">
      <img src="{{ asset('assets/images/inicio-malestar-estomacal.png') }}" alt="">
      <div class="cat-text">
        <p>Problemas estomacales</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="categoria">
      <img src="{{ asset('assets/images/inicio-gripe-y-tos.png') }}" alt="">
      <div class="cat-text pt-8">
        <p>Tos y gripe</p>
      </div>
    </div>
  </div>

    <div class="col-6 col-md-3">
    <div class="categoria">
      <img src="{{ asset('assets/images/inicio-vitaminas.png') }}" alt="">
      <div class="cat-text">
        <p>Vitaminas y suplementos</p>
      </div>
    </div>
  </div>

</div>
</div>

</div>

</section>


</main>
@include('layouts.footer.footer');
