<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 1</title>
</head>
<body>
    <h1>Vista de prueba</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Precio</th>

        </tr>
        @foreach ($medicinas as $medicina)
        <tr>
            <td>{{ $medicina -> MEDICINAS_ID }}</td>
            <td>{{ $medicina -> CLAVE }}</td>
            <td>{{ $medicina -> NOMBRE }}</td>
            <td>{{ $medicina -> PRECIO }}</td>
            
        </tr>
        @endforeach
    </table>
</body>
</html>