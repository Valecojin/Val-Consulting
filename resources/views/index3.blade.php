<!DOCTYPE html>
<html>
<head>
	<title>Val Consulting</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Invocamos el CDN de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Agregamos nuestro archivo de estilos -->
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>
	<!-- Barra de Navegacion -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Mi página</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#culturas">Culturas y Valores</a>
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
	
	<!-- Seccion 1 -->
	<div class="section1">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/automotriz.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="images/.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      
	
	<!-- Seccion 2 -->
	<div class="container mt-5" id="servicios">
        <div class="row">
            <div class="col-md-12">
                <h2>Servicios</h2>
                <p>Contenido de la sección Servicios</p>
            </div>
        </div>
    </div>
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
	<footer class="bg-dark text-white">
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
