<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 1</title>
</head>
<body>
    <h1>datos de la especialidad</h1>
    <a href="{{route('especialidades.index')}}">Regresar</a>
    <p>Id: {{ $especialidad -> id }}</p>
    <p>Nombre: {{ $especialidad -> nombre }}</p>
    <p>Descripcion: {{ $especialidad -> descripcion }}</p>
</body>
</html>