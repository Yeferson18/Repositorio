<!-- resources/views/prueba/create.blade.php (para crear un nuevo registro): -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Prueba</title>
</head>
<body>
    <h1>Crear Nueva Prueba</h1>
    <form action="{{ route('prueba.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>

<!--( 2) despues agrego carpeta con todo lo adetras con su carpeta y los modulos index y edit y show y create : -->