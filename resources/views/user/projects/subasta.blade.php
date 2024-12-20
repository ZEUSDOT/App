@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')
<style>
    .btn-get-started {
    font-family: "Raleway", sans-serif;
    text-transform: capitalize;
    background-color: transparent;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 0.5px;
    display: inline-block;
    padding: 7px 22px;
    transition: 0.5s;
    border: 2px solid #000;
    border-radius: 20px;
    color: #000;
  }
  .btn-get-started:hover {
    background: #3498db;
    border-color: #3498db;
    color:white;
    text-decoration: none;
  }
  .btn-container {
    display: flex;
    justify-content: center;
}
</style>

<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<!--Single Post-->
			<article class="vlt-single-post">
				<div class="vlt-animation-block mb-5 text-center" data-aos="fade" data-aos-delay="0" style="display:none;">
					<h1 class="m-0" style="font-size: 4rem;"><span class="vlt-highlight">subasta</span></h1>
				</div>
				<div class="section-title">
					<h2>Subasta de bienes muebles Agencia APP</h2>
				</div>
				<p style="text-align:justify">La Agencia APP, se permite informar que se encuentra publicado proceso para la enajenación de bienes muebles, a través de la modalidad de martillo, liderado por el Banco Popular, se debe seleccionar el evento del 23 de Agosto en el sitio web.</p>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nombre</th>
							<th scope="col">Recurso</th>
							<th scope="col">Opción</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Catálogo</td>
							<td>PDF</td>
							<td class="text-center">
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/martillo.pdf')}}" target="_blank">Ver PDF</a>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Detalles virtuales</td>
							<td>PDF</td>
							<td class="text-center">
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/detalle-martillo.pdf')}}" target="_blank">Ver PDF</a>
							</td>
						</tr>
                        <tr>
							<th scope="row">3</th>
							<td>Banco Popular</td>
							<td>Imagen</td>
							<td class="text-center">
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/banco.pdf')}}"  target="_blank">Ver PDF</a>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="btn-container pb-4">
					<a class="btn-get-started" href="https://www.elmartillo.com.co/en/inicio" target="_blank"><i class="fas fa-link"></i> Martillo Banco Popular</a>
				</div>
                <!-- <img alt="" src="{{ asset('assets/img/banco-popular.jpeg')}}"> -->
			</article>
		</div>
	</div>

@endsection