<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- <center>
    <h1 style="font-size:80px">Lista Alumnos</h1>
    <table class="table">
        @foreach ($students as $dato)
            {{-- function listar --}}
            <tr>
                <th>{{ $dato->id }}</th>
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
</center> -->

<center>
        <h1 style="font-size:80px">Lista Alumnos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Expediente</th>
                    <th>Nombre Estudiante</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $dato)
                    {{-- function listar --}}
                    <tr>
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->expediente }}</td>
                        <td>{{ $dato->nombre_estudiante }}</td>
                        <td>{{ $dato->apellido }}</td>
                        <td>
                            <a href="{{ route('student.show', $dato->id) }}" style="text-decoration: none">Mostrar</a>
                            <a href="{{ route('student.edit', $dato->id) }}" style="text-decoration: none">Editar</a>
                            <form action="{{ route('student.destroy', $dato->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>