<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 1</title>
</head>
<body>
    <h1>datos de los pacientes</h1>
    <a href="{{route('pacientes.index')}}">Regresar</a>    
    <p>Id: {{ $paciente -> id }}</p>
    <p>Nombre: {{ $paciente -> nombre }}</p>
    <p>Apellido: {{ $paciente -> apellido }}</p>
    <p>Edad: {{ $paciente -> edad }}</p>
    <p>Sexo: {{ $paciente -> sexo }}</p>

</body>
</html>