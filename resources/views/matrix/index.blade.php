<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matriz ingresada</title>
</head>
<body>
    <h1>Tu matriz 3x3 es:</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        @foreach ($matrix as $row)
            <tr>
                @foreach ($row as $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ route('matrix.form') }}">Ingresar otra matriz</a>
</body>
</html>
