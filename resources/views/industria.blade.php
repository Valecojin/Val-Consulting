<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <title>Industria</title>
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
      <img src="images/bienes raices y construccion.png">
    </div>
    <div class="contenido">
        <div class="cont-art">
        <center>
          <h2>Bienes Raices y Construcción</h2>
        </center>
        <p>Ofrecemos servicios de asesoría en aseguramiento de negocios, impuestos y a la propiedad de los inversionistas, desarrolladores, proveedores de fondos, los constructores de casas y contratistas.</p>
        <p>El sector de Bienes Raíces y Construcción ha pasado por altibajos en los últimos años. El mercado está cambiando continuamente de manera que las empresas buscan reestructurar y optimizar sus recursos mientras que revalúan la evolución del mercado, las inversiones y los contratos.</p>
        <p>En estos tiempos se necesita un asesor que realmente escuche y que se tome el tiempo para hacer las preguntas difíciles, y responder a las preguntas que usted podría no haber pensado. Ofrecemos toda la escala y amplitud de servicios que necesita, entregado de una maneradistintiva, personalizado, con un conocimiento profundo de la dinámica clave en el sector inmobiliario y de la construcción.</p>
        <p>Contamos con una amplia experiencia en los temas que afectan bienes raíces y construcción en empresas de nuestro país, apoyados por el verdadero alcance nacional y recursos de Val Consulting.</p>
        </div>
    </div>
</section>

<section class="seccion4">
    <div class="contenido">
      <article class="cont-art">
        <center>
          <h2>Hoteleria y Turismo</h2>
        </center>
        <p>Nos caracterizamos por nuestro amplio conocimiento del sector, y le impulsaremos a crecer en el sector de hotelería y turismo, ya que entendemos las tendencias en el sector, desde los impactos de los medios de comunicación y las agencias de viajes en línea, los nuevos consumidores, las operaciones sustentables y los retos de los mercados emergentes.</p>
        <p>De cara a estos y otros desafíos, trabajaremos con usted para planificar los escenarios, gestionar costos, crear organizaciones flexibles y el crecimiento de las finanzas.</p>
        <p>A través de nuestra comprensión de los mercados tradicionales y emergentes, trabajaremos junto a usted en el desarrollo de su expansión a nuevas áreas.</p>
      </article>
    </div>
    <div class="imagen">
      <img src="images/hoteleria.jpg" alt="Imagen de ejemplo">
    </div>
  </section>

  <section class="seccion2">
    <div class="imagen">
      <img src="images/tecologia.jpeg">
    </div>
    <div class="contenido">
        <div class="cont-art">
        <center>
          <h2>Tecnología</h2>
        </center>
        <p>En Val Consulting, trabajaremos con usted para sacar provecho de todas las oportunidades y gestionar los riesgos inherentes a la industria, ayudándolo a mantenerse siempre un paso adelante. Somos asesores en temas de tecnología, los medios y las comunicaciones de mercado, con una amplia base de clientes y una sólida red de inversores</p>
        <p>Nuestro equipo dedicado ofrece el alcance necesario de los servicios financieros y de asesoría empresarial a clientes en áreas de tecnología y medios de comunicación. Entregamos consejos de una manera distintiva, personalizada, con una comprensión de la dinámica del sector.</p>
        <p>Muchos de nuestros clientes de la industria tecnológica tienen operaciones internacionales o aspiran a extenderse a otros países, y Val Consulting está perfectamente posicionada para responder a estas ambiciones.</p>
        </div>
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
   