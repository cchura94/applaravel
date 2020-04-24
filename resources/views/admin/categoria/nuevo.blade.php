@extends("layouts.admin")

@section("titulo", "Nueva Categoria")

@section("contenedor")
<h1>Nueva categoria</h1>

<form action="{{ route('categoria.store') }}" method="post">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control">
    
    <label for="">Descripción</label>
    <textarea name="descripcion" class="form-control"></textarea>

    <input type="submit" class="btn btn-success">
    <button type="submit" class="btn btn-success">Guardar Categoria</button>
    <input type="reset" class="btn btn-info">
</form>

@endsection