<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar matriz 3x3</title>
</head>
<body>
    <h1>Ingresa los valores de la matriz 3x3</h1>

    <form action="{{ route('matrix.process') }}" method="POST">
        @csrf
        <table>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    @for ($j = 0; $j < 3; $j++)
                        <td>
                            <input type="number" name="matrix[]" required>
                        </td>
                    @endfor
                </tr>
            @endfor
        </table>
        <br>
        <button type="submit">Enviar matriz</button>
    </form>
</body>
</html>
