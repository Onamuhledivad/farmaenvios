<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">
    <meta http-equiv="content-language" content="es">

    <title>Farmaenvios | Inicia Sesión</title>

    <!-- Styles Gral-->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
     <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Icons -->
    <script src="https://kit.fontawesome.com/0c68a5b572.js" crossorigin="anonymous"></script>

</head>
<header>
<nav class="navbar navbar-light">
</nav>
</header>
<main>
<section class="container">
  <div class="row">
    <div class="login">
      <div class="logo-login">
        <a href="/"><img src="{{ asset('assets/images/login-logo.png') }}"></a>
      </div>

  @yield('forms')

  </div>
</div>
</section>
</main>
@include('layouts.footer.footer');


