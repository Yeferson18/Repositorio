<!-- resources/views/prueba/index.blade.php (para mostrar la lista de registros):  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pruebas</title>
</head>
<body>
    <h1>Listado de Pruebas</h1>
    <a href="{{ route('prueba.create') }}">Crear Nueva Prueba</a>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prueba as $prueba)
                <tr>
                    <td>{{ $prueba->nombre }}</td>
                    <td>{{ $prueba->descripcion }}</td>
                    <td>
                        <a href="{{ route('prueba.edit', $prueba) }}">Editar</a>
                        <form action="{{ route('prueba.destroy', $prueba) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
