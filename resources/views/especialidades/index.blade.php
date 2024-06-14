@extends('layouts.app')
@section('content')
    <h1>Especialidades</h1>
    <a href="{{ route('especialidades.create') }}" class="btn btn-primary">Nueva especialidad</a>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>


            </tr>
            <thead>
            <tbody>
                @foreach ($especialidades as $especialidad)
                    <tr>
                        <td>{{ $especialidad->id }}</td>
                        <td>{{ $especialidad->nombre }}</td>
                        <td>{{ $especialidad->descripcion }}</td>
                        <td>
                            <form action="{{ route('especialidades.destroy', $especialidad->id) }}" method="POST">
                                <a href="{{ route('especialidades.show', $especialidad->id) }}" class="btn btn-primary">Mostrar datos</a>
                                <a href="{{ route('especialidades.edit', $especialidad->id) }}" class="btn btn-primary">Modificar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" type="button" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    <!--codigo agregado para agregarle diferente paginacion-->
    {{ $especialidades->links('vendor.pagination.bootstrap-4') }}
@endsection
