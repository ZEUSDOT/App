@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<head>
  <link rel="stylesheet" href="{{ asset('assets/css/galeria.css')}}">
</head>

<div class="section-title" style="padding-top: 130px;">
          <h2>Intercambio vial Punto cero</h2>
        </div>

<div class="container">
 <!-- ======= Gallery Section ======= -->
 <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
     
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/punto_cero/3.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/punto_cero/3.jpg')}}" title="Punto cero" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/punto_cero/4.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/punto_cero/4.jpg')}}" title="Punto cero" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/punto_cero/5.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/punto_cero/5.jpg')}}" title="Punto cero" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/punto_cero/1.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/punto_cero/1.jpg')}}" title="Punto cero" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/punto_cero/2.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/punto_cero/2.jpg')}}" title="Punto cero" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          

        </div>

      </div>
    </section><!-- End Gallery Section -->
    </div>

@endsection