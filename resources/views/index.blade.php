<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <title>Val Consulting</title>
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
<!-- Section 1 -->
<section class="section1">
    <div class="video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/-GjScU50mxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <article class="texto">
      <center>
        <h2>Acerca de Nosotros</h2>
      </center>
      <p>Val Consulting es una firma colombiana que presta servicios de Asesoria tribuatria, Outsourcing, Auditoría y Consultoría de Normas Internacionales de Información Financiera (NIIF – IFRS) y Servicios especializados de Consultoría, desde hace más de 5 años.</p>
      <p>Los servicios son prestados por profesionales sobresalientes, comprometidos y capacitados constantemente para dar solución a las necesidades del cliente. Este es un factor de diferencia en el mercado que nos ha mantenido como una de las cinco mayores firmas en el pais. Contamos con más de 50 colaboradores, incluidos sus socios, que lideran y laboran en cada una de las líneas de servicio. Tenemos oficinas en las ciudades de Bogotá, Medellín y Cali.</p>

    </article>
  </section>
<!--Section 2-->

<section class="seccion2">
    <div class="imagen">
      <img src="images/services.jpeg">
    </div>
    <div class="contenido">
        <div class="cont-art">
        <center>
          <h2>Nuestros Servicios</h2>
        </center>
        <p>Asesoría tributaria: Nuestro equipo profesional y especializado, permite ajustar la asesoría con base en las necesidades de los clientes, analizando las alternativas legales para optimizar el uso de la normatividad y la carga tributaria</p>
        <p>Outsourcing: Las empresas frecuentemente se deciden por la tercerización para poder concentrarse en las actividades centrales del negocio</p>
        <p>Auditoria externa:El servicio de Auditoría Externa tiene como objetivo expresar una opinión independiente en relación con la razonabilidad de los Estados Financieros de las empresas o ciertas áreas de negocios en cuyo caso utilizamos procedimientos previamente convenidos</p>
        <p>Revisoría Fiscal: Nuestros profesionales trabajan con usted para ayudarlo a comprender cuáles son los riesgos y cómo abordarlos exitosamente</p>
        <li><a href="servicios.html">Lee Mas...</a></li>
      </div>
    </div>
</section>
<!--Section 3-->
  <section class="seccion3">
    <div  class="container"> 
        <div  class="row"> <!-- SE CREA FILA -->
        <!-- SE ASIGNAN LAS COLUMNAS 12/3 -->   

        <div class="col-lg-4 col-md-6"><h1>Bienes Raíces y Construcción</h1>
            <img src="images/construccion.jpg" alt="50px"><!-- ICONO -->
            <P>Ofrecemos servicios de asesoría en aseguramiento de negocios, impuestos y a la propiedad de los inversionistas, desarrolladores, proveedores de fondos, los constructores de casas y contratistas.</P>
        </div>

        <div class="col-lg-4 col-md-6"><h1>Hoteleria y Turismo</h1> 
            <img src="images/hotel.jpg" alt="50px"><!-- ICONO -->
            <p>Nos caracterizamos por nuestro amplio conocimiento del sector, y le impulsaremos a crecer en el sector de hotelería y turismo, ya que entendemos las tendencias en el sector, desde los impactos de los medios de comunicación y las agencias de viajes en línea, los nuevos consumidores, las operaciones sustentables y los retos de los mercados emergentes.</p>
        </div>

        <div class="col-lg-4 col-md-6"><h1>Tecnología</h1>
            <img src="images/tecno.jpg" alt="50px"><!-- ICONO -->
            <p>En Val Consulting, trabajaremos con usted para sacar provecho de todas las oportunidades y gestionar los riesgos inherentes a la industria, ayudándolo a mantenerse siempre un paso adelante. Somos asesores en temas de tecnología, los medios y las comunicaciones de mercado, con una amplia base de clientes y una sólida red de inversores.</p>
        </div>
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
   