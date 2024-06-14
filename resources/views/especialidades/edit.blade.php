<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion de especialidad</title>
</head>
<body>
    <h1>editar Especialidad</h1>
    <form action="{{route('especialidades.update', $especialidad->id)}}" method="POST">
        @csrf   
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $especialidad->nombre}}">
        </div>
        <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ $especialidad->descripcion}}">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>