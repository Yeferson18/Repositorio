<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fórmula Cuadrática</title>
</head>
<body>

    <form action="{{ route('cuadratica.store') }}" method="POST">
        @csrf

        <label for="a">Número a:</label>
        <br>
        <input type="number" name="a" id="a" required>
        <br><br>

        <label for="b">Número b:</label>
        <br>
        <input type="number" name="b" id="b" required>
        <br><br>

        <label for="c">Número c:</label>
        <br>
        <input type="number" name="c" id="c" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    @if(isset($resultados))
        <h2>Resultado:</h2>
        <p>{{ $resultados }}</p>
    @endif

</body>
</html>
