<!-- resources/views/prueba/edit.blade.php  (para editar un registro):-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prueba</title>
</head>
<body>
    <h1>Editar Prueba</h1>
    <form action="{{ route('prueba.update', $prueba) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $prueba->nombre }}" required><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required>{{ $prueba->descripcion }}</textarea><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
