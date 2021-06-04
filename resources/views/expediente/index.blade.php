@extends('layouts.plantillabase')

@section('contenido')
<a href="expedientes/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Asunto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($expedientes as $expediente)
        <tr>
            <td>{{$expediente->id}}</td>
            <td>{{$expediente->codigo}}</td>
            <td>{{$expediente->asunto}}</td>
            <td>{{$expediente->cantidad}}</td>
            <td>{{$expediente->precio}}</td>
            <td>
                <form action="{{ route ('expedientes.destroy',$expediente->id)}}" method="POST">
                <a href="/expedientes/{{$expediente->id}}/edit"class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection