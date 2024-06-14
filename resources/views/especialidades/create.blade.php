<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Especialidades</title>
</head>
<body>
    <h1>Especialidades</h1>
    <form action="{{route('especialidades.store')}}" method="POST">
        @csrf   
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>