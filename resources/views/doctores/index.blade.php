@extends('layouts.app')
@section('content')
    <h1>Doctores</h1>
    <a href="{{ route('doctores.create') }}" class="btn btn-primary">Nuevo doctor</a>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctores as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->nombre }}</td>
                    <td>{{ $doctor->apellido }}</td>
                    <td>{{ $doctor->especialidad }}</td>
                    <td>
                        <form action="{{ route('doctores.destroy', $doctor->id) }}" method="POST">
                            <a href="{{ route('doctores.show', $doctor->id) }}" class="btn btn-primary">Mostrar datos</a>
                            <a href="{{ route('doctores.edit', $doctor->id) }}" class="btn btn-primary">Modificar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Código agregado para agregarle paginación -->
    {{ $doctores->links('vendor.pagination.bootstrap-5') }}
@endsection

