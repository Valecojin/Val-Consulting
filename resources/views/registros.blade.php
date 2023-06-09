<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Registros</title>

       <!-- Agregar estilos de Bootstrap -->
        <link rel="icon" href="images/logo.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Agregar nuestros estilos -->
        <link href="{{ asset('styles/styles.css') }}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Barra de Navegacion -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
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

        <h1 class="text-center">Lista de Registros</h1>
        <table class="table table-bordered table-dark table-hover">
            <thead>
                <tr>
                    <th class="bg-primary">Nombre</th>
                    <th class="bg-primary">Correo</th>
                    <th class="bg-primary">Teléfono</th>
                    <th class="bg-primary">Mensaje</th>
                    <th class="bg-primary">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                <tr>
                    <td data-nombre="{{ $registro->Nombre }}">{{ $registro->Nombre }}</td>
                    <td data-correo="{{ $registro->Correo }}">{{ $registro->Correo }}</td>
                    <td data-telefono="{{ $registro->Telefono }}">{{ $registro->Telefono }}</td>
                    <td data-mensaje="{{ $registro->Mensaje }}">{{ $registro->Mensaje }}</td>
                    <td class="d-flex">
                        <button type="button"class="btn btn-primary" data-toggle="modal" data-target="#editarRegistroModal{{ $registro->id }}">Editar</button>
                        <form action="{{ route('registros.destroy', $registro->id) }}" method="POST" id="form-eliminar-{{ $registro->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" data-id="{{ $registro->id }}">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <div class="modal fade" id="editarRegistroModal{{ $registro->id }}" tabindex="-1" role="dialog" aria-labelledby="editarRegistroModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editarRegistroModalLabel">Editar Registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          <form id="contactForm" method="POST" action="<?php echo(route('registros.update', $registro->id)); ?>">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nameInput">Nombre</label>
                                        <input type="text" class="form-control" id="nameInput" name="Nombre" value="{{ $registro->Nombre }}"">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailInput">Correo</label>
                                        <input type="email" class="form-control" id="emailInput" name="Correo" required value="{{ $registro->Correo }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneInput">Teléfono</label>
                                        <input type="text" class="form-control" id="phoneInput" name="Telefono" required value="{{ $registro->Telefono }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="messageInput">Mensaje</label>
                                        <textarea class="form-control" id="messageInput" name="Mensaje" rows="3" required >{{ $registro->Mensaje }}</textarea>
                                   </div>
                                    <button type="submit" class="btn btn-primary" id="enviarFormulario">Enviar</button>
                                  </form>
                        </div>
                    </div>
                </div>   
                @endforeach
            </tbody>
        </table>
        <!-- Ventana modal para editar registro -->
        
       <div class="text-center">
            <a href="{{ asset('index.html') }}" class="btn btn-primary mb-3">Regresar</a>
        </div>

        <script>
            $(document).on('click', '.editarRegistroBtn', function() {
                var id = $(this).data('id');
                var nombre = $(this).data('nombre');
                var correo = $(this).data('correo');
                var telefono = $(this).data('telefono');
                var mensaje = $(this).data('mensaje');
                console.log(nombre);

                $('#editarRegistroModal').find('form').attr('action', '/registros/' + id);
                $('#editarRegistroModal').find('#nombre').val(nombre);
                $('#editarRegistroModal').find('#correo').val(correo);
                $('#editarRegistroModal').find('#telefono').val(telefono);
                $('#editarRegistroModal').find('#mensaje').val(mensaje);
            });

        </script>
        <!-- Scripts de Bootstrap -->
	
    </body>
</html>

