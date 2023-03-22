<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agencia App - MUDAG </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('assets/css/mudag.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/font-awesome.min.css')}}">
    </head>
    <style>
        .masthead {
    background-color: #f8f9fa;
    padding-top: 2.5rem;
    padding-bottom: 0rem;
}

 </style>
   
        
<header id="header" class="fixed-top" style="position: absolute;">
<div class="bg-primary">
    <div class="container-xl logo_menu_superior">
      <div class="header-govco">
  <a href="https://www.gov.co/" target="blank" title="Ir al portal GOV.CO">
  <img src="https://www.mintic.gov.co/portal/715/channels-616_header_govco.png" alt="Imagen logo GovCo" class="img-fluid">
  <span class="sr-only">Logo Gobierno de Colombia</span>
  </a>
</div>
</div>
</div>
    <div class="container d-flex align-items-center" style="margin-left: 2px;">

  
    <img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png"  style=" width: 200px;
    height: 90px;">

      <nav id="navbar" class="navbar">
	  <ul>
		
		<li><a href="{{route('user.projects.mudag')}}">Inicio</a></li>
 

		<li>
		<a href="{{route('user.projects.estadio2')}}">
				   <span>Estadio</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.hotel2')}}">
				   <span>Hotel</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.edificio')}}">
				   <span>Multipropósito</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.gastronomia')}}">
				   <span>Emprendimiento</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.urbanismo')}}">
				   <span>Urbanismo</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.testimonios')}}">
				   <span>Testimonios</span>
			   </a>
		</li>
    <li class="dropdown btn-book-a-table"><a href="https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=22-19-13109290&g-recaptcha-response=03AGdBq27StjLP0h5b3LG3GQv8ZxYSUzeD2g-MuOaclZvugcbFHnCyQFzN70zJSty3Eu55AiXGySiJbZGa6KytE1ZP-m38QBy3MCUvgyfXFg108g3BkPRsBClneKfXkuO8X7oeBIOXp8drsTO-lsPeaC-26bAIaG6l_VnMdvazoXWT4D1rMtftC8TdnepDJMyYKtDXc8gaXZp0XW1DxtVb23ePPr9XOEoaBMFP2MvMoMDxLN42GrI6XBHJzcLSsntCxskp1k_Y-eFTBVUBt8vunhhFcs1x2DETJ4pDOCTPaO2wgqNJtdNB8s3vcFPXIBN-wHo92UlkZhqKiQdWhkztkyCfIoorIL51Mb3RLRLFAUIYO7WMYm-OA4PO3HTWfxXJrMJO-vo-bdqqb1mjOpgLV25ES6z9ZsFruecJdzCoPad4tLdKKWAFctFOg2ZKK0JMBEajm5FfP_KR6yllgKlLo5CLt-SK8bd6J8ZrTW0pIFSiZ9mOnlefuAA" class="getstarted scrollto" target="_blank"><span>Proyecto de pliegos</span></a>

</li>
<li class="dropdown btn-book-a-table"><a href="{{ asset('assets/pdf/Modernizacion.pdf')}}" class="getstarted scrollto" target="_blank"><span>Conoce más</span></a>

</li>
 
</ul>

    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>


    </div>
  </header>
  <body id="page-top">
        <section style="padding-bottom: 0rem;">
        <div style="padding-top:25px;">
        <picture>
            <source media="(min-width: 800px)" srcset="{{ asset('assets/img/Proyectos/header-urban.png') }}">
            <source media="(min-width: 330px)" srcset="{{ asset('assets/img/Proyectos/MOBILE-7.png') }}">
            <img src="{{ asset('assets/img/Proyectos/header-urban.png') }}" style="width:100% " alt="Ejemplo">
        </picture>
        </div>
        <!-- <img src="{{ asset('assets/img/Proyectos/header-urban.png') }}" style="position: relative; width:100%; height:700px; background-size: 100% 100%;" /> -->
        </section>
        <!-- Quote/testimonial aside-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    
                 

                     
                            <h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">Incluyente y renovado </h6>
                            <p class="lead fw-normal text-muted mb-5">Este proyecto plantea un urbanismo acondicionado con senderos de circulación, rampas, accesibilidad inclusiva, iluminación, señalética, amueblamiento urbano, patio de maniobras, reubicación arbórea, zonas corporativas y de hinchas (fan zone), mesas y sillas, y espacios para activaciones de marca. </p>
                            <p class="lead fw-normal text-muted mb-5">Un espacio público renovado que prioriza la movilidad peatonal, las actividades deportivas y lúdicas al aire libre, la conexión con el transporte masivo, la oferta de servicios para el encuentro social y familiar, y aprovechamiento económico del espacio público, con el cual se potencia el uso de plazoletas, módulos comerciales, zonas verdes, baños públicos y demás elementos de amueblamiento y entorno urbanos.</p>

                            
                    
                     
                </div>
            </div>
        </header>
          
        <img src="{{ asset('assets/img/Proyectos/banner-urbano.png') }}" style=" width:100%;" />
     
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    
                 

                     
                           
                            
                            <p class="lead fw-normal text-muted mb-5">Los beneficios socioeconómicos de la modernización de la Unidad Deportiva Atanasio Girardot, cuentan con un enfoque humano, social, económico, ambiental y físico-espacial, que permite la atención de todas las edades, grupos poblacionales y económicos; reconociendo este, como un espacio de encuentro, hito que precede y cimenta el futuro de lo que se busca y desea que se convierta la ciudad de Medellín.</p>

                            
                    
                     
                </div>
            </div>
        </header>
    
        </section>
        <section>
        <div class="container px-5">



        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="https://i.ibb.co/2tYD0rR/edficio.png" class="d-block w-100" alt="...">
    </div>   
    <div class="carousel-item">
      <img src="https://i.ibb.co/5Fq2QvH/urban.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/4JMrfWx/ubr.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<p>Imágenes de referencia sujetas a cambios.</p>
        </div>
        </section> 

   
        <!-- Footer-->
        <footer id="footer">


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Agencia APP</h3>
        <p>
        Medellin / Antioquia <br>
        Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br></p>
       <a href="{{ route('user.projects.mapa') }}"><p><strong>Mapa del sitio</strong></p></a>
       

      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contacto</h4>
        <p> <strong> Telefono: </strong> +57 604 448 1740</p>
         <p><strong>Correo:</strong> info@app.gov.co</p>
        <p> <strong>Información general:</strong>  info@app.gov.co</p>
        <p> <strong> Notificaciones judiciales:</strong> procesosjudiciales@app.gov.co</p>
     
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Horario de atención</h4>
       <p> <strong> Lunes - Jueves: </strong> 7:30 AM - 5:30 PM</p>
       <p> <strong> Viernes: </strong> 7:30 AM - 4:30 PM</p>
     
      </div>

        

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Redes Sociales</h4>
        <p>Síguenos y enterate de todo</p>
        <div class="social-links mt-3">
          <a href="https://twitter.com/agenciaappmed?lang=es" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          
          <a href="https://www.instagram.com/agenciaappmed/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
          
          <a href="https://www.youtube.com/channel/UCV1jArK6Q8cgXX7ESNocJxA" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

</footer><!-- End Footer -->
        <!-- Feedback Modal-->
   
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('assets/js/mudag.js')}}"></script>
    </body>
</html>