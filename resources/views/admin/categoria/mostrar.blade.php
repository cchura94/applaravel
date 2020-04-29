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

    <div class="col-md-12">

    <a href="{{ route('producto.create') }}" class="btn btn-success">Agregar Nuevo Producto</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>CANTIDAD</td>
                <td>IMAGEN</td>
                <td>PRECIO</td>
                <td>CATEGORIA</td>
                <td>PROVEEDOR</td>
                <td>ACCIONES</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categoria->productos as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->nombre }}</td>
                <td>{{ $prod->cantidad }}</td>
                <td> <img src="{{ asset('$prod->imagen') }}" alt=""> </td>
                <td>{{ $prod->precio }}</td>
                <td>{{ $prod->categoria->nombre }}</td>
                <td>{{ $prod->proveedor->nombre }}</td>
                <td>

                </td>
            </tr>
            @endforeach    
        </tbody>
    </table>

    </div>
</div>
    
    


@endsection