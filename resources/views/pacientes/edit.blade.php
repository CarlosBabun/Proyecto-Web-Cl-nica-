<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion de doctores</title>
</head>
<body>
    <h1>editar Doctores</h1>
    <form action="{{route('pacientes.update', $paciente->id)}}" method="POST">
        @csrf   
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $paciente->nombre}}">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="{{ $paciente->apellido}}">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" value="{{ $paciente->edad}}">
        </div>
        <div>
            <label for="sexo">Sexo:</label>
            <input type="text" id="sexo" name="sexo" value="{{ $paciente->sexo}}">
        </div>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>