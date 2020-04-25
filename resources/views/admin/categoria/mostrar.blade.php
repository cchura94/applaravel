@extends("layouts.admin")

@section("titulo", "Editar Categoria")

@section("contenedor")
<h1>categoria: </h1>
<div class="row">
    <div class="col-md-4">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" required value="{{ $categoria->nombre }}" disabled>   
    </div>
    <div class="col-md-8">
        <label for="">Descripción</label>
        <textarea name="descripcion" class="form-control" disabled>{{ $categoria->descripcion }}</textarea>
    </div>
</div>
    
    


@endsection