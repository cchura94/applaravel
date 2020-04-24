@extends("layouts.admin")

@section("titulo", "Lista de Categorias")

@section("contenedor")

    <h1>Lista de categorias</h1>

    <table class="table table-striped table-hover">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>DESCRIPCION</td>
            <td>ACCIONES</td>
        </tr>
        @foreach($categorias as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->nombre }}</td>
            <td>{{ $cat->descripcion }}</td>
            <td>
                <a href="{{ route('categoria.show', $cat->id) }}" class="btn btn-success">ver</a>
                <a href="{{ route('categoria.edit', $cat->id) }}" class="btn btn-warning">editar</a>

            </td>
        </tr>
        @endforeach
    
    </table>



<?php //echo $dato; ?>

@endsection
