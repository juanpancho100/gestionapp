@extends('layouts.plantillabase')

@section('contenido')
<h2>Editar registros</h2>

<form action="/expedientes/{{$expediente->codigo}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$expediente->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Asunto</label>
        <input id="asunto" name="asunto" type="text" class="form-control" value="{{$expediente->asunto}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$expediente->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$expediente->precio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Archivo</label>
        {{$expediente->archivo}}
        <input id="archivo" name="archivo" type="file" step="any"  class="form-control" value="">
        <span class="error_span">{{$errors->first('archivo')}}</span>
        
    </div>
    <a href="/expedientes" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
</form>


@endsection