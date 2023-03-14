@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@push('styles')

@endpush
@section('content')
<head>
	<style>
		section {
	padding: 100px 0;
	overflow: hidden;
  }
	</style>
</head>



	   <section id="about" class="about">
       <div align="center"><img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png" style=" width: 380px; height: 250px;"></div>
        <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h1>Atención PQRSD</h1>
          <br>
          <h2>Peticiones, Quejas, Reclamos, Sugerencias, Denuncias</h2>
        </div>

        <div class="row content">
          <div class="col-center">
        <p>La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas – APP-, es un ente con carácter descentralizado adscrito a la Alcaldía de Medellín; Una unidad administrativa especial, del orden municipal, con personería jurídica, autonomía administrativa, financiera, presupuestal y patrimonial, que hace parte del Presupuesto General del Distrito Especial de Ciencia, Tecnología e Innovación de Medellín con lo establecido en el artículo 3 del Decreto 006 de 1998. </p>

        <p>Tenemos como misión gestionar y promover acciones que den sostenibilidad al espacio público, al paisaje y al patrimonio. Además, responsables de promover la generación de recursos a través de la implementación de los instrumentos de financiación definidos en el Plan de Ordenamiento Territorial y fomentar la incorporación de capitales privados a proyectos de inversión para beneficio público.</p>
         
        </div>		
        </div>
        </div>

        
        </section>
        <div>
        <div class="section-title">
          <h2>Respetado ciudadano:</h2>
        </div>
        <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row content">
          <div class="col-center">
          <p> Por favor ingrese los datos solicitados con el fin de enviarle al correo electrónico, un número de verificación con el cual podrá terminar su radicación.
          Es importante señalar que los datos facilitados en este formulario pasarán a formar parte de los archivos automatizados propiedad de la Agencia APP y podrán ser utilizados para el ejercicio de las competencias asignadas por ley. Lo anterior, de conformidad con la Ley 1581 de 2012, "Por la cual se dictan disposiciones generales para la protección de datos personales</p>
  
        </div>		
        </div>
        </div>
        </div>

        
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
      <form class="row g-3">
      <div class="col-md-3">
    <label for="validationServer04" class="form-label">Tipo de documento:</label>
    <select class="form-control" required>
      <option selected disabled value="">Seleccionar</option>
      <option value="Cedula_C">Cédula de ciudadanía</option>
      <option value="Cedula_E">Cédula de extranjería</option>
      <option value="Tarjeta_I">Tarjeta de identidad</option>
      <option value="Pasaporte">Pasaporte</option>
      <option value="Nit">Nit</option>
    </select>
 
  </div>
  <div class="col-md-3">
    <label for="validationServer01" class="form-label">Numero de documento</label>
    <input type="number" class="form-control" min="1" pattern="^[0-9]+">
  </div>
  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Primer Nombre</label>
    <input type="text" class="form-control" required>

  </div>
  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control">

  </div>
  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" required>

  </div>
  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" required>

  </div>
  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Correo electrónico</label>
    <input type="text" class="form-control" required>

  </div>
  <div class="col-md-3">
    <label for="validationServer02" class="form-label">Confirmar correo electrónico</label>
    <input type="text" class="form-control" required>

  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Descripción</label>
    <textarea class="form-control" required cols="30" rows="8"></textarea>

  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox"   required>
      <label class="form-check-label" for="invalidCheck3">
        Acepto los terminos y condiciones
      </label>
  
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>

           
                      
      </div>
    </section>


@endsection
