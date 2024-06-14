@extends('layouts.app')
@section('content')
    <h1>editar Doctores</h1>
    <form action="{{ route('doctores.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $doctor->nombre }}">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="{{ $doctor->apellido }}">
        </div>
        <div>
            <label for="especialidad">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad" value="{{ $doctor->especialidad }}">
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
