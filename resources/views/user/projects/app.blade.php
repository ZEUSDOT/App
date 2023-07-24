@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/Banners/gestion.jpg')}}" alt="">
				<div class="vlt-page-title-hero__content ocultPosition">

					<h1 style="color:white;">
					Gestión de asociaciones público privadas
					</h1>
				</div>
			</div>
		</div>		
</section>
		
<body>

	<div class="container">
		
			<div class="text-center">
				<div class="section-title" style="margin-top: 50px;">
					<h2>¿Que es una Asociación Público Privada?</h2>
				</div>
				<p style="text-align: justify;">Es un mecanismo de contratación donde el Estado vincula capital privado para la construcción y el sostenimiento de infraestructura pública. Este tipo de asociaciones aportan mayor eficiencia, sostenibilidad en la provisión del servicio, ya que cuenta con indicadores de cumplimiento que se miden periódicamente por una interventoría y una supervisión; además, permite el equilibrio en la distribución de riesgos, lo que genera grandes ahorros para el sector público.</p>
			</div>
			<div class="section-subtitle text-center" style="margin-top: 50px;">
				<h3>La Subdirección de Gestión de Alianzas Público Privadas de la Agencia APP del Distrito de Medellín en la actualidad tiene el siguiente portafolio de proyectos de iniciativas públicas y privadas.</h3>
			</div>
	

	
		<div class="row" style="justify-content:center;">
			<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="5000">					
						<section class="img-new">
							<a target="_blank" href="{{ asset('assets/pdf/APP Español.pdf') }}">
								<img src="{{ asset('assets/img/Banners/gestion2.jpg')}}" class="img-fluid img-border">
							</a>
						</section>						
					</div>

					<div class="carousel-item" data-bs-interval="5000">						
						<section class="img-new">
							<a target="_blank" href="{{ asset('assets/pdf/APP-English.pdf') }}">
								<img src="{{ asset('assets/img/Banners/gestion1.jpg')}}" class="img-fluid img-border">
							</a>
						</section>						
					</div>					
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" style="padding-right: 40px; width: 8%;">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" style="padding-left: 40px; width: 8%;">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>               
	

		<div class="row proyectos-destacados" style="justify-content:center;">
			<div class="col-lg-6 col-md-6 proy1">
				<h4 align="center">Proyectos de iniciativa pública</h4>
				<ul class="ulNew">
					<li>
						<a href="https://app.gov.co/proyectos/mudag">Modernización Unidad Deportiva Atanasio Girardot</a>
					</li>
					<li>
						<a href="https://app.gov.co/Carcel">Centro de Detención Preventiva para Sindicados</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 proy1">
				<h4 align="center">Proyectos de iniciativa privada</h4>
				<ul class="ulNew">
					<li>
						<a href="https://app.gov.co/proyectos/arena_medellin">Arena Medellín</a>
					</li>
					<li>
						<a href="https://app.gov.co/proyectos/AIIRE">AIIRE</a>
					</li>
					<li>
						<a href="https://app.gov.co/proyectos/medellin_saludable">Medellín Saludable</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="pt-5" style="margin-bottom: 20px;">
			<iframe allowfullscreen frameborder="0" height="700px" src="https://storymaps.arcgis.com/stories/e04199c603bf49fb8b036e9f49fd1a5e?cover=false" width="100%"></iframe>
		</div>
	</div>
</body>

@endsection
