@include('layouts.header.ecommerce')
<main>
<section class="container">
<div class="row">

{{-- 	<div class="col-2">
	@include('layouts.sidebar.ecommerce');
	</div>
 --}}
<div class="col-12">
@yield('buscar-ecommerce')


@include('ecommerce.productos')
</div>

</div>
</section>




</main>
@include('layouts.footer.footer')