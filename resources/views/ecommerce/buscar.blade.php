@extends('layouts.inicio.ecommerce')
@section('buscar-ecommerce')

<div class="buscar-header">
	<div class="row">
		<div class="col">
			<h1 class="texto-buscar c-azul">SOMOS LA SOLUCIÓN A TU RECETA</h1>
		</div>
		<div class="col">
			<div class="input-group mb-3">
	  <input type="text" class="form-control input-header c-azul" placeholder="" aria-label="" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	    <button class="btn  btn-buscar-header c-azul" type="button"><i class="fas fa-search"></i></button>
	  </div>
	</div>
		</div>
	</div>
	<p class="text-ceter c-azul">Te ofrecemos los mismos ingredientes y contenidos a precios que se adaptan a tu economía</p>
</div>

@endsection