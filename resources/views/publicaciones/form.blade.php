<div class="col col-12 mt-3">
    <label for="titulo">Nombre</label>
    <input required value="{{ old('titulo', $publicacion->titulo) }}"  type="text" name="titulo" class="form-control" required>
</div>

<div class="col col-12 mt-3">
    <label for="descripcion">Apellido</label>
    <input required value="{{ old('descripcion', $publicacion->descripcion) }}"  type="text" name="descripcion" class="form-control" required>
</div>

<div class="col col-12 mt-3">
    <label for="imagen">Imagen</label>
    <input required value="{{ old('imagen', $publicacion->imagen) }}"  type="image" name="imagen" class="form-control">
</div>
<div class="col col-12 mt-3">
    <label for="idR">id reaccion</label>
    <input required value="{{ old('idR', $publicacion->idR) }}"  type="text" name="idR" class="form-control" required>
</div>

<div class="col col-12 mt-3">
    <label for="idU">id Usuario</label>
    <input required value="{{ old('idU', $publicacion->idU) }}"  type="text" name="idU" class="form-control" required>
</div>

<div class="col col-12 mt-3 acciones">
    <div class="boton">
        <input type="submit" class="btn btn-secondary" value="Enviar">
    </div>
</div>
