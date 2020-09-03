@extends('layouts.inicio.corporativo')
@section('contenido')

<div class="texto-inicio">
	<h1 class="c-naranja titulo-corporativo">Preguntas Frecuentes</h1>


<div id="accordion">
  <div class="card">
    <div class="card-header" id="q1">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c1" aria-expanded="false" aria-controls="c1">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Qué servicios me ofrece Farmaenvíos?
        </button>
      </h5>
    </div>

    <div id="c1" class="collapse" aria-labelledby="q1" data-parent="#accordion">
      <div class="card-body">
        Farmaenvíos es la Solución a tu Receta, busca opciones por ti y te las presenta para que al final tu elijas la mejor. Inicias indicando el medicamento que necesitas, y Farmaenvíos busca y te presenta una alternativa más económica. Tu comparas y eliges comprar el medicamento que buscabas o la opción que Farmaenvíos te presenta.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="q2">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c2" aria-expanded="false" aria-controls="c2">
         <i class="fas fa-plus-circle c-naranja"></i> ¿Por qué al consultar el producto que necesito me aparece otro medicamento del lado derecho?
        </button>
      </h5>
    </div>
    <div id="c2" class="collapse" aria-labelledby="q2" data-parent="#accordion">
      <div class="card-body">
       Farmaenvíos te proporciona la información del producto que buscas, y de forma adicional, gracias a su búsqueda inteligente te muestra un producto con la misma concentración y forma farmacéutica para que tu puedas comparar y elegir el producto que más te convenga o se adapte a tus necesidades.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="q3">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c3" aria-expanded="false" aria-controls="c3">
          <i class="fas fa-plus-circle c-naranja"></i> ¿Tengo que elegir el medicamento del lado derecho o puedo comprar el que yo busqué inicialmente?
        </button>
      </h5>
    </div>
    <div id="c3" class="collapse" aria-labelledby="q3" data-parent="#accordion">
      <div class="card-body">
        El medicamento del lado derecho es una alternativa al producto que buscaste, con la misma concentración y forma farmaceutica. Farmaenvíos te ayuda a buscar una opción con un precio más económico y te la presenta, sin embargo tu eres quien elige cual de las dos comprar, ya que Farmaenvíos puede surtirte ambos.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="q4">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c4" aria-expanded="false" aria-controls="c4">
         <i class="fas fa-plus-circle c-naranja"></i> ¿El producto que me muestra del lado derecho es un Genérico?
        </button>
      </h5>
    </div>
    <div id="c4" class="collapse" aria-labelledby="q4" data-parent="#accordion">
      <div class="card-body">
        En algunos casos es un Genérico y en otros es una Marca Alternativa que contiene la misma concentración y forma marmacéutica del producto que solicitas, solo que tiene un precio distinto.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="q5">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c5" aria-expanded="false" aria-controls="c5">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Por qué los Genéricos o Marcas Alternativas que aparecen del lado derecho tienen un costo mas bajo? <br>¿Tienen menor calidad?
        </button>
      </h5>
    </div>
    <div id="c5" class="collapse" aria-labelledby="q5" data-parent="#accordion">
      <div class="card-body">
        Los Genéricos o Marcas Alternativas que aparecen del lado derecho son más económicas por decisión y estrategia del laboratorio, lo cual puede deberse a muchos factores: invierten menos en publicidad o en distribución, no tienen que recuperar gastos de años de investigación, etc. Ninguna de estas razones tienen que ver con los estándares de calidad.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="q6">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c6" aria-expanded="false" aria-controls="c6">
       <i class="fas fa-plus-circle c-naranja"></i> Observo dos precios, ¿Cuál es el que voy a pagar?
        </button>
      </h5>
    </div>
    <div id="c6" class="collapse" aria-labelledby="q6" data-parent="#accordion">
      <div class="card-body">
        Se muestra el precio de venta total del medicamento, este es el que se debe pagar. También se muestra el Precio por Unidad que puede ser Tableta, Cápsula, Ampolletas, etc con esto puedes comparar el precio por unidad del Medicamento que solicitaste y el del medicamento que aparece del lado derecho, y comprobar que es más económico.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="q7">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c7" aria-expanded="false" aria-controls="c7">
        <i class="fas fa-plus-circle c-naranja"></i> No recuerdo el nombre del medicamento que tomé, ¿Farmaenvíos me puede decir que tomar?
        </button>
      </h5>
    </div>
    <div id="c7" class="collapse" aria-labelledby="q7" data-parent="#accordion">
      <div class="card-body">
        Es muy importante recordar que el Médico es la única persona calificada para revisarte y determinar cual es el medicamento idoneo para el malestar que estás sintiendo. Farmaenvíos no puede prescribirte, a través de su búsqueda inteligente te puede mostrar una gama de medicamentos pero no puede decirte lo que es ideal para ti, te sugerimos que acudas con tu médico de confianza y regreses a surtir tu receta con Farmanvíos.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="q8">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c9" aria-expanded="false" aria-controls="c9">
        <i class="fas fa-plus-circle c-naranja"></i> Busqué el medicamento que me recetó el médico, pero Farmaenvíos no me mostró una alternativa, ¿Por qué sucede esto?
        </button>
      </h5>
    </div>
    <div id="c9" class="collapse" aria-labelledby="q8" data-parent="#accordion">
      <div class="card-body">
        Puede ser que no haya otra alternativa para el medicamento que te recetó el doctor, es decir, no hay existencia de algún genérico u otra marca, por eso Farmaenvíos te indica: "Por el momento esta es la mejor alternativa".
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="q9">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c9" aria-expanded="false" aria-controls="c9">
       <i class="fas fa-plus-circle c-naranja"></i> Busqué el medicamento que me recetó el médico, pero en Farmaenvíos me apareció un mensaje que dice que el producto no forma parte del catálogo, ¿Por qué?
        </button>
      </h5>
    </div>
    <div id="c9" class="collapse" aria-labelledby="q9" data-parent="#accordion">
      <div class="card-body">
        Farmaenvíos realiza una busqueda y selección muy amplia de medicamentos para que tu tengas a la mano las opciones más recetadas por los médicos,sin embargo existen medicamentos que por su manejo (controlados, refrigerados, moléculas huérfanas) por su disponibilidad de inventario, o por su poca utilización, no se incluyen en nuestras opciones.
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q10">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c10" aria-expanded="false" aria-controls="c10">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Por qué Farmaenvíos no vende medicamentos controlados y refrigerados?
        </button>
      </h5>
    </div>
    <div id="c10" class="collapse" aria-labelledby="q10" data-parent="#accordion">
      <div class="card-body">
        Los Medicamentos Controlados y Refrigerados tienen un tratamiento especial de acuerdo a la legislación mexicana actual, por el momento es preferible que los adquiera directamente en la Farmacia de su preferencia
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q11">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c11" aria-expanded="false" aria-controls="c11">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Por qué en algunos productos es necesario entregar la receta al repartidor para que me den mi medicamento?
        </button>
      </h5>
    </div>
    <div id="c11" class="collapse" aria-labelledby="q11" data-parent="#accordion">
      <div class="card-body">
        De acuerdo a la legislación mexicana en materia de salud, los antibióticos requieren receta médica y es necesario que el cliente la entregue al momento de adquirir su producto, esto para llevar un control del uso de estos productos y cuidar la salud de la población mexicana.
      </div>
    </div>
  </div>

      <div class="card">
    <div class="card-header" id="q12">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c12" aria-expanded="false" aria-controls="c12">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Por qué en algunos productos es necesario entregar la receta al repartidor para que me den mi medicamento?
        </button>
      </h5>
    </div>
    <div id="c12" class="collapse" aria-labelledby="q12" data-parent="#accordion">
      <div class="card-body">
        De acuerdo a la legislación mexicana en materia de salud, los antibióticos requieren receta médica y es necesario que el cliente la entregue al momento de adquirir su producto, esto para llevar un control del uso de estos productos y cuidar la salud de la población mexicana.
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q13">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c13" aria-expanded="false" aria-controls="c13">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Puedo accesar a Farmaenvíos desde mi Smartphone o Tablet?
        </button>
      </h5>
    </div>
    <div id="c13" class="collapse" aria-labelledby="q13" data-parent="#accordion">
      <div class="card-body">
        Si, nuestro sitio esta diseñado para que puedas verlo desde cualquier dispositivo móvil o tableta e incluso contamos con una App especial para estos dispositivos.
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q14">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c14" aria-expanded="false" aria-controls="c14">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Una vez hecho mi pedido puedo modificarlo, cancelarlo o devolverlo?
        </button>
      </h5>
    </div>
    <div id="c14" class="collapse" aria-labelledby="q14" data-parent="#accordion">
      <div class="card-body">
        El pedido se puede modificar o cancelar antes de llegar al momento del pago si o antes de elegir la opción Finalizar Pedido. Si se presenta alguna situación relacionada a este tema puede consultarnos a través del apartado Contáctanos
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q15">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c15" aria-expanded="false" aria-controls="c15">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Tengo un monto mínimo de compra en pedidos a través de Farmaenvíos?
        </button>
      </h5>
    </div>
    <div id="c15" class="collapse" aria-labelledby="q15" data-parent="#accordion">
      <div class="card-body">
        No hay un mínimo de compra, pero para que el envío sea gratis el pedido debe ser mayor a $70
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q16">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c16" aria-expanded="false" aria-controls="c16">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Qué forma de pago puedo utilizar en Farmaenvíos?
        </button>
      </h5>
    </div>
    <div id="c16" class="collapse" aria-labelledby="q16" data-parent="#accordion">
      <div class="card-body">
       Efectivo, pago con tarjeta de débido y crédito VISA y Mastercard, Amex y PayPal
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q17">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c17" aria-expanded="false" aria-controls="c17">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Puedo solicitar factura?
        </button>
      </h5>
    </div>
    <div id="c17" class="collapse" aria-labelledby="q17" data-parent="#accordion">
      <div class="card-body">
      Si, al momento de realizar tu compra se te preguntará si requieres factura y se te pediran los datos fiscales necesarios para realizarla.
      </div>
    </div>
  </div>

<div class="card">
    <div class="card-header" id="q18">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c18" aria-expanded="false" aria-controls="c18">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Qué plazo tengo para generar la factura de mi compra?
        </button>
      </h5>
    </div>
    <div id="c18" class="collapse" aria-labelledby="q18" data-parent="#accordion">
      <div class="card-body">
     La factura debe solicitarse en el momento de la compra. Si se presenta alguna situación con este tema puedes comunicarte con nosotros a través del apartado Contáctanos.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="q19">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c19" aria-expanded="false" aria-controls="c19">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Cuánto cuesta el servicio a domicilio?
        </button>
      </h5>
    </div>
    <div id="c19" class="collapse" aria-labelledby="q19" data-parent="#accordion">
      <div class="card-body">
     El servicio de reparto no tendrá costo siempre y cuando se encuentre dentro del Polígono de Entregas indicado en el sitio y el monto a enviar sea mayor a $70, de no ser así se cobrará $39 por gastos de envío
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q20">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c20" aria-expanded="false" aria-controls="c20">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Cuánto tarda en llegar mi pedido?
        </button>
      </h5>
    </div>
    <div id="c20" class="collapse" aria-labelledby="q20" data-parent="#accordion">
      <div class="card-body">
     La entrega de producto se realizará en un máximo de 2 horas después de confirmado el Pedido, siempre y cuando el domicilio indicado por el Cliente esté dentro del polígono de entregas descrito en el sitio.
      </div>
    </div>
  </div>

      <div class="card">
    <div class="card-header" id="q21">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c21" aria-expanded="false" aria-controls="c21">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Qué hago si no llega mi pedido?
        </button>
      </h5>
    </div>
    <div id="c21" class="collapse" aria-labelledby="q21" data-parent="#accordion">
      <div class="card-body">
     Comunicate con nosotros a través de cualquiera de los medios descritos en el apartado Contáctanos
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q22">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c22" aria-expanded="false" aria-controls="c22">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Puedo programar un pedido?
        </button>
      </h5>
    </div>
    <div id="c22" class="collapse" aria-labelledby="q22" data-parent="#accordion">
      <div class="card-body">
     Si, solo tienes que poner la hora y el día especifico a la hora de hacer el pedido.
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q23">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c23" aria-expanded="false" aria-controls="c23">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Cuál es el horario del Servicio a Domicilio?
        </button>
      </h5>
    </div>
    <div id="c23" class="collapse" aria-labelledby="q23" data-parent="#accordion">
      <div class="card-body">
     De 8:00 am a 11:00 pm
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q24">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c24" aria-expanded="false" aria-controls="c24">
        <i class="fas fa-plus-circle c-naranja"></i> El médico me recetó un producto que tomo diario, cada mes tengo que hacer la misma compra, ¿Puedo programarlo con anticipación?
        </button>
      </h5>
    </div>
    <div id="c24" class="collapse" aria-labelledby="q24" data-parent="#accordion">
      <div class="card-body">
     Si, Farmaenvíos te ofrece la opción de resurtir tu pedido cada mes o cuando se requiera dependiendo de tu tratamiento y tu toma diaria, puedes programarlo o nosotros te enviaremos recordatorio para que solo nos des tu consentimiento.
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="q25">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed question c-azul" data-toggle="collapse" data-target="#c25" aria-expanded="false" aria-controls="c25">
        <i class="fas fa-plus-circle c-naranja"></i> ¿Cómo puedo entrar en contacto con ustedes?
        </button>
      </h5>
    </div>
    <div id="c25" class="collapse" aria-labelledby="q25" data-parent="#accordion">
      <div class="card-body">
     A través del apartado Contáctanos resolveremos todas tus dudas y te proporcionaremos el apoyo que necesitas.
      </div>
    </div>
  </div>


</div>




</div>

@endsection