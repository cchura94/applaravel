@extends("layouts.admin")

@section("titulo", "Editar Categoria")

@section("contenedor")
<h1>Editar categoria</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categoria.update', $categoria->id) }}" method="post">
    @csrf
    @Method('PUT')
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control" required value="{{ $categoria->nombre }}">
    
    <label for="">Descripción</label>
    <textarea name="descripcion" class="form-control">{{ $categoria->descripcion }}</textarea>

    <button type="submit" class="btn btn-success">Modificar Categoria</button>
    <input type="reset" class="btn btn-info">
</form>

@endsection