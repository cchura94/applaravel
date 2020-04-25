@extends("layouts.admin")

@section("titulo", "Lista de Categorias")

@section("contenedor")

    <h1>Lista de categorias</h1>

    @if (session('ok'))
        <div class="alert alert-success">
            {{ session('ok') }}
        </div>
    @endif
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


                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal{{$cat->id}}">
  Eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="Modal{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro de Eliminar la Categoria?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$cat->nombre}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form action="{{ route('categoria.destroy', $cat->id) }}" method="post">
            @csrf
            @Method("DELETE")
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
</div>

                

            </td>
        </tr>
        @endforeach
    
    </table>

{{ $categorias->links() }}
total: {{ $categorias->count() }}
<?php //echo $dato; ?>

@endsection
