@extends('layouts.app')
@section('content')
    <h1>Doctores</h1>
    <form action="{{ route('doctores.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">
        </div>
        <div>
            <label for="especialidad">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad">
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
