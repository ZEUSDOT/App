@include('includes.header.mudag')
<body id="page-top">
	<!-- Mashead header-->
	<section style="padding-bottom: 0rem;">
		<div style="padding-top:25px;">
			<picture><source media="(min-width: 800px)" srcset="{{ asset('assets/img/Proyectos/header-edificio.png') }}"> <source media="(min-width: 330px)" srcset="{{ asset('assets/img/Proyectos/MOBILE-5.png') }}"> <img src="{{asset('assets/img/Proyectos/header-edificio.png')}}" style="width:100%"></picture>
		</div><!-- <img src="{{ asset('assets/img/Proyectos/header-edificio.png') }}" style="position: relative; width:100%; height:700px; background-size: 100% 100%;" /> -->
	</section><!-- Quote/testimonial aside-->
	<header class="masthead">
		<div class="container px-5">
			<div class="row gx-5 align-items-center">
				<h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">@lang('messages.parrafo34')</h6>
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo35')</p>
			</div>
		</div>
	</header><img src="{{asset('assets/img/Proyectos/banner-edificio1.png')}}" style="width:100%;"> <!-- App features section-->
	<section>
		<div class="container px-5">
			<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
				<div class="carousel-indicators">
					<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active"><img alt="..." class="d-block w-100" src="https://i.ibb.co/PtKZyy6/MULTI3.png"></div>
					<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/VCGFXVr/edificio1.png"></div>
					<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/L8ZshZw/edificio3.png"></div>
				</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
			</div>
			<p>Imágenes de referencia sujetas a cambios.</p>
		</div>
	</section><img src="{{asset('assets/img/Proyectos/banner-edificio.png')}}" style=" width:100%;">
	<section id="features">
		<section class="section" id="team">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box text-center">
	</section>
	</section>
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>Agencia APP</h3>
						<p>Medellin / Antioquia<br>
						Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br></p><a href="{{route('user.projects.mapa')}}">
						<p><strong>Mapa del sitio</strong></p></a>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Contacto</h4>
						<p><strong>Telefono:</strong> +57 604 448 1740</p>
						<p><strong>Correo:</strong> info@app.gov.co</p>
						<p><strong>Información general:</strong> info@app.gov.co</p>
						<p><strong>Notificaciones judiciales:</strong> procesosjudiciales@app.gov.co</p>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Horario de atención</h4>
						<p><strong>Lunes - Jueves:</strong> 7:30 AM - 5:30 PM</p>
						<p><strong>Viernes:</strong> 7:30 AM - 4:30 PM</p>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Redes Sociales</h4>
						<p>Síguenos y enterate de todo</p>
						<div class="social-links mt-3">
							<a class="twitter" href="https://twitter.com/agenciaappmed?lang=es" target="_blank"><i class="bx bxl-twitter"></i></a> <a class="instagram" href="https://www.instagram.com/agenciaappmed/" target="_blank"><i class="bx bxl-instagram"></i></a> <a class="youtube" href="https://www.youtube.com/channel/UCV1jArK6Q8cgXX7ESNocJxA" target="_blank"><i class="bx bxl-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- End Footer -->
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
	</script> <!-- Core theme JS-->
	 
	<script src="js/scripts.js">
	</script> <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
	 <!-- * *                               SB Forms JS                               * *-->
	 <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
	 <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
	 
	<script src="https://cdn.startbootstrap.com/sb-forms-latest.js">
	</script> 
	<script src="{{asset('assets/js/mudag.js')}}">
	</script>
</body>
</html>