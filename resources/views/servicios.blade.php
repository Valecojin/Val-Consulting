<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <title>Servicios</title>
    <link rel="preconectar" href="https://fonts.googleapis.com">
    <link rel="preconectar" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
 <!-- header-->
    <header>
        <div>
            
        </div>
	<!--Navigation Bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
		<a class="navbar-brand" href="/">Val Consulting</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('industria') }}">Industria</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contacto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="contactoDropdown">
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#contactModal">Contacto</a>
                      <a class="dropdown-item" href="{{ route('registros.index') }}">Registros</a>
                    </div>
                </li>
            </ul>
            
		</div>
	</nav>        
</header>
<!--Section 2-->

<section class="seccion2">
    <div class="imagen">
      <img src="images/asesoria.jpg">
    </div>
    <div class="contenido">
        <div class="cont-art">
        <center>
          <h2>Asesoría tributaria</h2>
        </center>
        <p>Nuestro equipo profesional y especializado, permite ajustar la asesoría con base en las necesidades de los clientes, analizando las alternativas legales para optimizar el uso de la normatividad y la carga tributaria. En esta línea, se ofrecen servicios de:</p>
        <p> •	Outsourcing tributario
            •	Diagnóstico tributario
            •	Planeacíon tributaria
            •	Declaraciones impositivas
            •	Compensación o devolución de saldos de impuestos
            •	Precios de Transferencia
            •	Due Diligence tributario y legal
            •	Asesoría Legal en derecho tributario, corporativo, comercial, contractual, cambiario y laboral
            •	Atención de demandas contencioso-administrativas en materia tributaria
            •	Constitución, disolución y liquidación de sociedades
            •	Apoderamiento de sociedades
            •	Procesos de fusión y escisión
            </p>
        </div>
    </div>
</section>

<section class="seccion4">
    <div class="contenido">
      <article class="cont-art">
        <center>
          <h2>Outsourcing</h2>
        </center>
        <p>Las empresas frecuentemente se deciden por la tercerización para poder concentrarse en las actividades centrales del negocio, mejorando así el rendimiento de las actividades no centrales, reducir el costo que estas implican y concentrarse en las actividades que son realmente importantes y relevantes para el negocio.</p>
        <p>Nos focalizamos en apoyar a las empresas ejecutando tareas y procesos que si bien son críticos, son desarrollados por nuestra firma de manera eficiente y oportuna en coherencia con los objetivos de las organizaciones.</p> 
        <p>Desempeñamos tareas de:</p>
        <p>•	Contabilidad
            •	Contabilidad bajo NIIF – IFRS
            •	Impuestos
            •	Nómina
            •	Tesorería
        </p>
      </article>
    </div>
    <div class="imagen">
      <img src="images/outsoursing.jpeg" alt="Imagen de ejemplo">
    </div>
  </section>

  <section class="seccion2">
    <div class="imagen">
      <img src="images/auditext.jpg">
    </div>
    <div class="contenido">
        <div class="cont-art">
        <center>
          <h2>Audotoria Externa</h2>
        </center>
        <p>El servicio de Auditoría Externa tiene como objetivo expresar una opinión independiente en relación con la razonabilidad de los Estados Financieros de las empresas o ciertas áreas de negocios en cuyo caso utilizamos procedimientos previamente convenidos.  Nuestro trabajo lo llevamos a cabo con base en las normas de auditoría generalmente aceptadas en Colombia como Internacionalmente</p>
     </div>
    </div>
</section>

<section class="seccion4">
    <div class="contenido">
      <article class="cont-art">
        <center>
          <h2>Revisoría Fiscal</h2>
        </center>
        <p>Nuestros profesionales trabajan con usted para ayudarlo a comprender cuáles son los riesgos y cómo abordarlos exitosamente. Asi mismo, utilizamos las últimas herramientas tecnológicas para brindar servicios y asesoramiento adaptados a la naturaleza y circunstancias particulares de su negocio, la responsabilidad con que ejercemos nuestras funciones de revisores fiscales, es un rasgo que nos identifica.</p>
        <p>Entendemos la Revisoría Fiscal como un servicio integral, cuyo objetivo primordial es dar cumplimiento a las funciones establecidas para este cargo, por el Código de Comercio, nuestra labor en calidad de revisores fiscales hace especial énfasis en el cumplimiento a disposiciones legales y normas estatutarias, en la evaluación de la gestión de la administración en el desarrollo del objeto social de las organizaciones.</p> 
      </article>
    </div>
    <div class="imagen">
      <img src="images/revisoriafiscal.jpg" alt="Imagen de ejemplo">
    </div>
  </section>



    
<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">Contáctanos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="contactForm" method="POST" action="<?php echo(route('registros.store')); ?>">
            @csrf
            <div class="form-group">
                <label for="nameInput">Nombre</label>
                <input type="text" class="form-control" id="nameInput" name="Nombre" required>
            </div>
            <div class="form-group">
                <label for="emailInput">Correo</label>
                <input type="email" class="form-control" id="emailInput" name="Correo" required>
            </div>
            <div class="form-group">
                <label for="phoneInput">Teléfono</label>
                <input type="text" class="form-control" id="phoneInput" name="Telefono" required>
            </div>
            <div class="form-group">
                <label for="messageInput">Mensaje</label>
                <textarea class="form-control" id="messageInput" name="Mensaje" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" id="enviarFormulario">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
      <script>
      $(document).ready(function() {
          $('#enviarFormulario').click(function(event) {
              event.preventDefault();
              var form = $('#contactForm');
              var formData = form.serialize();
              $.ajax({
                  url: form.attr('action'),
                  type: 'POST',
                  data: formData,
                  success: function(response) {
                      $('#contactModal').modal('hide');
                      form.trigger("reset");
                      alert('Mensaje enviado correctamente');
                  },
                  error: function(response) {
                      alert('Ha ocurrido un error, por favor inténtelo nuevamente.');
                  }
              });
          });
      });
      </script>

     
<!-- Footer -->

<!-- Footer -->
<footer>
    <div class="container py-3">
      <div class="row">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-0">Derechos Reservados VAL CONSULTING.COM - 2023</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <a href="https://www.instagram.com/"><i class="bi bi-instagram fs-4 mx-3"></i></a>
          <a href="https://www.facebook.com/"><i class="bi bi-facebook fs-4 mx-3"></i></a>
          <a href="https://www.twitter.com/"><i class="bi bi-twitter fs-4 mx-3"></i></a>
        </div>
      </div>
    </div>  
  </footer>

<!-- Scripts de Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
   