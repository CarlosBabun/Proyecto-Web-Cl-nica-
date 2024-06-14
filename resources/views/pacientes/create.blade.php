<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes</title>
</head>
<body>
    <h1>Pacientes</h1>
    <form action="{{route('pacientes.store')}}" method="POST">
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
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad">
        </div>
        <div>
            <label for="sexo">Sexo:</label>
            <input type="text" id="sexo" name="sexo">
        </div>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>