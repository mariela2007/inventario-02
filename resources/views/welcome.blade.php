<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial">
        <title>Proyecto Inventario</title>
    </head>
    <body>
        <h1>Mis proyectos</h1>
        <br>
        <ul>
            <li>
                <h2> 
                <a href="{{ route('ecuacion.index') }}">Ecuacion</a>

                </h2>
            </li>
            <li>
                <h2>
                <a href="{{ route('matrix.index') }}">Matrix</a>
                </h2>
            </li>
        </ul>
    </body>
</html>