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
    <table class="tabler" >
    </center>

                    <td>
                        <h4>Id
                    </td>
                    <td>
                        <h4>Codigo
                    </td>
                    <td>
                        <h4>Nombre modulo
                    </td>
                    <td>
                        <h4>Id profesor
                    </td>
                    <td>
                        <h4>Id alumno
                    </td>
                    
                    <td></td>
                    <td></td>
                    @foreach ($modules as $dato)
                        {{-- function listar --}}
                        <tr>
                            
                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->codigo }}</td>
                            <td>{{ $dato->nombre_modulo }}</td>
                            <td>{{ $dato->id_profesor }}</td>
                            <td>{{ $dato->id_student }}</td>
                            

                            <td><a class="btn btn-primary" href="{{ route('module.show', $dato->id) }}" style="text-decoration: none">Mostrar</a></td>
                            <td><a class="btn btn-primary" href="{{ route('module.edit', $dato->id) }}" style="text-decoration: none">Editar</a></td>
                            <td>
                                <form action="{{ route('module.destroy', $dato->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table> -->

                <div class="container mt-5">
        <div class="text-center mb-4">
            <h2>Module Table</h2>
        </div>

        <a class="btn btn-warning" href="{{ route('student.create') }}">Crear Estudiantes</a>
        <a class="btn btn-warning" href="{{ route('teacher.create') }}">Crear Profesor</a>

        <a class="btn btn-warning" href="{{ route('student.listar') }}">Listar Estudiantes</a>
        <a class="btn btn-warning" href="{{ route('teacher.listar') }}">Listar Profesor</a>
        <a class="btn btn-warning" href="{{ route('module.create') }}">Crear Modulo</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Nombre modulo</th>
                    <th>Id profesor</th>
                    <th>Id alumno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $dato)
                <tr>
                    <td>{{ $dato->id }}</td>
                    <td>{{ $dato->codigo }}</td>
                    <td>{{ $dato->nombre_modulo }}</td>
                    <td>{{ $dato->id_profesor }}</td>
                    <td>{{ $dato->id_student }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('module.show', $dato->id) }}">Mostrar</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('module.edit', $dato->id) }}">Editar</a>
                        <form action="{{ route('module.destroy', $dato->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>