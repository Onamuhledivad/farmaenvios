<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">
    <meta http-equiv="content-language" content="es">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <title>Farmaenvios </title>

    <!-- Styles Gral-->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
     <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Icons -->
    <script src="https://kit.fontawesome.com/0c68a5b572.js" crossorigin="anonymous"></script>

</head>
<header>
<nav class="navbar navbar-expand-lg bg-azul">
<div class="logo-header">
  <a href="/"><img src="{{ asset('assets/images/menu-logo.png') }}" alt="Logo"></a>
</div>
  <div class="sesion-menu">
    <a href="login" class="sesion-text text-white">Inicia Sesión</a>
    <img src="{{ asset('assets/images/otx.png') }}" alt="OTX" class="sesion-img bg-white">
  </div>
</nav>
</header>