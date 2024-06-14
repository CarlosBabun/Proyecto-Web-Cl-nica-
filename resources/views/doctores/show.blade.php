@extends('layouts.app')
@section('content')
    <h1>datos de los doctores</h1>
    <a href="{{route('doctores.index')}}" class="btn btn-primary">Regresar</a>    
    <p>Id: {{ $doctor -> id }}</p>
    <p>Nombre: {{ $doctor -> nombre }}</p>
    <p>Apellido: {{ $doctor -> apellido }}</p>
    <p>Especialidad: {{ $doctor -> especialidad }}</p>
@endsection