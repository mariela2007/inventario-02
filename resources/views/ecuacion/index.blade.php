<!DOCTYPE html>
<html>
<head>
    <title>Ecuación</title>
</head>
<body>
    <h1><strong>Ecuación</strong></h1>

    <form method="POST" action="{{ route('ecuacion.store') }}">


        @csrf

        <div style="margin-bottom: 20px;">
            <label for="a">Valor de a:</label>
            <input type="number" name="a" value="{{ old('a') }}" placeholder="Ingrese valor de a">

        </div>

        <div style="margin-bottom: 20px;">
            <label for="b">Valor de b:</label>
            <input type="number" name="b" value="{{ old('b') }}" placeholder="Ingrese valor de b">
        </div>

        <button type="submit">Guardar</button>
    </form>

    @isset($respuesta)
    <h2>Respuesta: {{ $respuesta }}</h2>
@endisset
</body>
</html>
