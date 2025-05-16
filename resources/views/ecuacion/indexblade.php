<!DOCTYPE html>
<html lang="es">
    <head>

    </head>
    <body>
        <h1>Ecuacion</h1>
        <br>
        <pre>
            <form action="{{ router('ecuacion.index')}}" method="GET">
                <div>
                    <label fro="">Valor de a:</label>
                    <imput type="text" name="a" autocomplete="off">  
                </div>

                <div>
                    <label for="">Valor de b:</label>
                </div>
                <div>
                    <button type="submit">Guardar</button>
                </div> 
            </form>
        </pre>
    </body>

</html>