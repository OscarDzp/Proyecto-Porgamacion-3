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
    <input required value="{{ old('imagen', $publicacion->imagen) }}"  type="text" name="imagen" class="form-control">
</div>
{{--<div class="col col-12 mt-3">--}}
{{--    <label for="idR">id reaccion</label>--}}
{{--    <input required value="{{ old('idR', $publicacion->idR) }}"  type="text" name="idR" class="form-control" required>--}}
{{--</div>--}}

{{--<div class="col col-12 mt-3">--}}
{{--    <label for="idU">id Usuario</label>--}}
{{--    <input required value="{{ old('idU', $publicacion->idU) }}"  type="text" name="idU" class="form-control" required>--}}
{{--</div>--}}
<div class="col-12 mt-3">
    <label for="idR" class="block text-gray-500 font-bold mb-2">Reaccion</label>
    <select name="idR" id="idR" required class="form-input rounded-md shadow-md border-solid border-2 border-black w-full text-lg px-3 py-2 @error('idR') border-red-600 @enderror">
        @foreach($reacciones as $reaccion)
            <option value="{{ $reaccion->id }}" {{ $reaccion->id === $publicacion->idR ? 'selected' : '' }}>{{ $reaccion->nombre }}</option>
        @endforeach
    </select>
    @error('idR')
    <p class="text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
<div class="col-12 mt-3">
    <label for="idU" class="block text-gray-500 font-bold mb-2">Usuario</label>
    <select name="idU" id="idU" required class="form-input rounded-md shadow-md border-solid border-2 border-black w-full text-lg px-3 py-2 @error('idU') border-red-600 @enderror">
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ $usuario->id === $publicacion->idU ? 'selected' : '' }}>{{ $usuario->nombre }}</option>
        @endforeach
    </select>
    @error('idU')
    <p class="text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
<div class="col col-12 mt-3 acciones">
    <div class="boton">
        <input type="submit" class="btn btn-secondary" value="Enviar">
    </div>
</div>
