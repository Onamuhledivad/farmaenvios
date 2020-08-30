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
   <div class="box13">
    <div class="categoria">
      <div class="box-content">
        <a class="i-mas" data-toggle="modal" data-target="#opc1"><i class="fas fa-search-plus"></i></a>
      </div>
      <img src="{{ asset('assets/images/inicio-cuidado-personal.png') }}" alt="">
      <div class="cat-text">
        <p>cuidado <br> personal</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="box13">
    <div class="categoria">
      <div class="box-content">
        <a class="i-mas" data-toggle="modal" data-target="#opc2"><i class="fas fa-search-plus"></i></a>
      </div>
      <img src="{{ asset('assets/images/inicio-dolor-e-inflamacion.png') }}" alt="">
      <div class="cat-text">
        <p>Dolor e inflamación</p>
      </div>
    </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="box13">
    <div class="categoria">
      <div class="box-content">
        <a data-toggle="modal" data-target="#opc3" class="i-mas"><i class="fas fa-search-plus"></i></a>
      </div>
      <img src="{{ asset('assets/images/inicio-material-medico.png') }}" alt="">
      <div class="cat-text pt-8">
        <p>Material Médico</p>
      </div>
    </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="box13">
    <div class="categoria">
      <div class="box-content">
        <a data-toggle="modal" data-target="#opc4" class="i-mas"><i class="fas fa-search-plus"></i></a>
      </div>
      <img src="{{ asset('assets/images/inicio-pediatrico.png') }}" alt="">
      <div class="cat-text pt-8">
        <p>Pediátrico</p>
      </div>
    </div>
  </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="box13">
    <div class="categoria">
      <div class="box-content">
        <a data-toggle="modal" data-target="#opc5" class="i-mas"><i class="fas fa-search-plus"></i></a>
      </div>
      <img src="{{ asset('assets/images/inicio-malestar-estomacal.png') }}" alt="">
      <div class="cat-text">
        <p>Problemas estomacales</p>
      </div>
    </div>
  </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="box13">
    <div class="categoria">
      <div class="box-content">
        <a data-toggle="modal" data-target="#opc6" class="i-mas"><i class="fas fa-search-plus"></i></a>
      </div>
      <img src="{{ asset('assets/images/inicio-gripe-y-tos.png') }}" alt="">
      <div class="cat-text pt-8">
        <p>Tos y gripe</p>
      </div>
    </div>
  </div>
  </div>

    <div class="col-6 col-md-3">
    <div class="box13">
    <div class="categoria">
      <div class="box-content">
        <a data-toggle="modal" data-target="#opc7" class="i-mas"><i class="fas fa-search-plus"></i></a>
      </div>
      <img src="{{ asset('assets/images/inicio-vitaminas.png') }}" alt="">
      <div class="cat-text">
        <p>Vitaminas y suplementos</p>
      </div>
    </div>
  </div>
  </div>

</div>
</div>

</div>

</section>


<!-- Modal -->
<div class="modal fade" id="opc1" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cuidado Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="modal-menu">
         <li><a href="" class="opc-link">Piel</li>
         <li><a href="" class="opc-link">Cabello</li>
         <li><a href="" class="opc-link">Zona íntima</li>
         <li><a href="" class="opc-link">Pies</li>
         <li><a href="" class="opc-link">Ojos</li>
         <li><a href="" class="opc-link">Boca</li>
         <li><a href="" class="opc-link">Salud sexual</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="opc2" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Dolor e inflamación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="modal-menu">
        <li><a href="">Cabeza</a></li>
        <li><a href="">Estómago</a></li>
          <li><a href="">Articulaciones</a></li>
          <li><a href="">Muscular</a></li>
          <li><a href="">Dental</a></li>
          <li><a href="">Garganta</a></li>
          <li><a href="">Cólicos</a></li>
          <li><a href="">Hemorroides</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="opc3" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Material Médico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="modal-menu">
          <li><a href="">Antibacteriales</a></li>
          <li><a href="">Cubrebocas</a></li>
            <li><a href="">Jeringas</a></li>
              <li><a href="">Material de curación</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="opc4" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pediátrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="modal-menu">
<li><a href="">Fiebre</a></li>
<li><a href="">Tos y gripa</a></li>
  <li><a href="">Dolor e inflamación</a></li>
    <li><a href="">Vitaminas</a></li>
      <li><a href="">Pañales</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="opc5" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">problemas estomacales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="modal-menu">
<li><a href="">Diarrea</a></li>
<li><a href="">Agruras</a></li>
  <li><a href="">Antiácidos</a></li>
    <li><a href="">Náuseas</a></li>
      <li><a href="">Gastritis</a></li>
        <li><a href="">Electrolitos</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="opc6" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tos y gripa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="modal-menu">
<li><a href="">Tos seca</a></li>
<li><a href="">Tos con flemas</a></li>
  <li><a href="">Alergia</a></li>
    <li><a href="">Gripe</a></li>
      <li><a href="">Fiebre</a></li>
        <li><a href="">Congestión Nasal</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="opc7" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">vitaminas y suplementos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="modal-menu">
<li><a href="">Multivitamínicos</a></li>
<li><a href="">Memoria</a></li>
  <li><a href="">Cansancio</a></li>
    <li><a href="">Maternidad</a></li>
      <li><a href="">Niños</a></li>
        <li><a href="">Tercera edad</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


</main>
@include('layouts.footer.footer');
