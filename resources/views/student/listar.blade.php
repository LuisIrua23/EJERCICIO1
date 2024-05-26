<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1 style="font-size:80px">Lista alumnos</h1>
    <table class="table">
        @foreach ($students as $dato)
            {{-- function listar --}}
            <tr>
                <td>{{ $dato->id }}</td>
                <td>{{ $dato->expediente }}</td>
                <td>{{ $dato->nombre_estudiante }}</td>
                <td>{{ $dato->apellido }}</td>

                <td><a href="{{ route('student.show', $dato->id) }}" style="text-decoration: none">Mostrar</a></td>
                <td><a href="{{ route('student.edit', $dato->id) }}" style="text-decoration: none">Editar</a></td>
                <td>
                    <form action="{{ route('student.destroy', $dato->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</center>
</body>
</html>