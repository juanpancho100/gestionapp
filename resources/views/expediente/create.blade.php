@extends('layouts.plantillabase')

@section('contenido')
<h2>Crear registros</h2>

<form action="/expedientes" method="POST" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Asunto</label>
        <input id="asunto" name="asunto" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Archivo</label>
        <input id="archivo" name="archivo" type="file" step="any" value="" class="form-control" tabindex="6">
        <span class="error_span">{{$errors->first('archivo')}}</span>
        
    </div>
    <a href="/expedientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    
    
</form>
@endsection