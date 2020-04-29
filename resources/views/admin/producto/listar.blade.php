@extends("layouts.admin")

@section("titulo", "Lista de Productos")

@section("contenedor")

<h1>Lista de Productos</h1>

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
        @foreach($productos as $prod)
        <tr>
            <td>{{ $prod->id }}</td>
            <td>{{ $prod->nombre }}</td>
            <td>{{ $prod->cantidad }}</td>
            <td> <img src="{{ asset($prod->imagen) }}" alt="" width="100px"> </td>
            <td>{{ $prod->precio }}</td>
            <td>{{ $prod->categoria->nombre }}</td>
            <td>{{ $prod->proveedor->nombre }}</td>
            <td>

            </td>
        </tr>
        @endforeach    
    </tbody>
</table>

@endsection