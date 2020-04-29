@extends("layouts.admin")

@section("titulo", "Nuevo Producto")

@section("contenedor")
<h1>Nuevo Producto </h1>

<form action="{{ route('producto.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Nombre Producto:</label>
    <input type="text" name="nombre" class="form-control">

    <label for="">Cantidad:</label>
    <input type="text" name="cantidad" class="form-control">

    <label for="">Imagen:</label>
    <input type="file" name="imagen" class="form-control">

    <label for="">Precio Producto:</label>
    <input type="number" name="precio" step="0.01" class="form-control">

    <label for="">descripcion:</label>
    <input type="text" name="descripcion" class="form-control">


    <label for="">Categoria</label>
    <select name="categoria_id" id="" class="form-control">
        @foreach($categorias as $cat)
        <option value="{{ $cat->id }}">{{$cat->nombre}}</option>
        @endforeach
    </select>

    <label for="">Proveedor</label>
    <select name="proveedor_id" id="" class="form-control">
        @foreach($proveedores as $prov)
        <option value="{{ $prov->id }}">{{$prov->nombre}}</option>
        @endforeach
    </select>
    <input type="submit" class="btn btn-success" value="guardar Producto">

</form>

@endsection