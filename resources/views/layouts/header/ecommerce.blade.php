<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">
    <meta http-equiv="content-language" content="es">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <title>Farmaenvios | eCommerce </title>

    <!-- Styles Gral-->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
     <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Icons -->
    <script src="https://kit.fontawesome.com/0c68a5b572.js" crossorigin="anonymous"></script>

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-azul">
  <div class="logo-header">
  <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/menu-logo.png') }}" alt="Logo"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarText">

    <ul class="navbar-nav mr-auto nav-ecommerce">
      <li class="nav-item active">
        <a class="nav-link" href="#">Mis Pedidos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mis Direcciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactanos</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle user" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Username
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cerrar Sesión</a>
          <a class="dropdown-item" href="#">Mi Cuenta</a>
          <a class="dropdown-item" href="#">Mi Familia</a>
        </div>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="#"><i class="fas fa-shopping-cart shop"></i></a>
      </li>
    </ul>

  </div>
</nav>
</header>