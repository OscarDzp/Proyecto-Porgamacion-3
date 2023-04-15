<div class="col col-12 mt-3">
    <label for="nombre">Nombre</label>
    <input  required value="{{old ('nombre', $reaccion->nombre) }}" type="text" name="nombre" class="form-control" >
</div>

<div class="col col-12 mt-3">
    <label for="icono">icono</label>
    <input value="{{old ('icono', $reaccion->icono) }}" type="file" name="icono" class="form-control">
</div>

<div class="col col-12 mt-3 acciones">
    <div class="boton">
        <input type="submit" class="btn btn-secondary" value="Enviar">
    </div>
</div>
