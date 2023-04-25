<div class="col col-12 mt-3">
    <label for="nombre">Nombre de la Reacción</label>
    <input  required value="{{old ('nombre', $reaccion->nombre) }}" type="text" name="nombre" class="form-control" >
</div>
<div class="col col-12 mt-3">
    <label for="icono">Icono</label>
    <input required value="{{old ('icono', $reaccion->icono) }}" type="text" name="icono" class="form-control">
</div>
<div class="col col-12 mt-3 acciones">
    <div class="boton">
        <input type="submit" class="btn btn-success" value="Guardar">
    </div>
    <div class="boton">
        <a href="{{route('reacciones.index')}}" class="btn btn-primary">Regresar</a>
    </div>
</div>
