@extends('layouts.app')
@section('content')
    <h1>Pacientes</h1>
    <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Nuevo paciente</a>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>sexo</th>
                <th>Acciones</th>


            </tr>
            <thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->id }}</td>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->apellido }}</td>
                        <td>{{ $paciente->edad }}</td>
                        <td>{{ $paciente->sexo }}</td>
                        <td>
                            <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                                <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-primary">Mostrar
                                    datos</a>
                                <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-primary">Modificar</a>
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
    {{ $pacientes->links('vendor.pagination.bootstrap-5') }}
@endsection
