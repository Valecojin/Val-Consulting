<form method="POST" action="{{ route('registros.update', $registro->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ $registro->Nombre }}">
    </div>

    <div class="form-group">
        <label for="Correo">Correo</label>
        <input type="email" name="Correo" id="Correo" class="form-control" value="{{ $registro->Correo }}">
    </div>

    <div class="form-group">
        <label for="Telefono">Teléfono</label>
        <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{ $registro->Telefono }}">
    </div>

    <div class="form-group">
        <label for="Mensaje">Mensaje</label>
        <textarea name="Mensaje" id="Mensaje" class="form-control">{{ $registro->Mensaje }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>