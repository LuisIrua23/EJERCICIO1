<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('student.update', $dato) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf {{--  token o seguridad --}}
                    <label class="form-label">
                        Expediente
                        <br>
                        <input class="form-control" type="text" name="expediente"
                            value="{{ old('expediente', $dato->expediente) }}" required>
                    </label>
                    <br>
                    <label class="form-label">
                        Nombre
                        <br>
                        <input class="form-control" type="text" name="nombre_estudiante"
                            value="{{ old('nombre_estudiante', $dato->nombre_estudiante) }}" required>
                    </label>
                    <br>
                    <label class="form-label">
                        Apellido
                        <br>
                        <input class="form-control" type="text" name="apellido"
                            value="{{ old('apellido', $dato->apellido) }}" required>
                    </label>
                    <br>
                    <br>
                    
                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
                </form>
</body>
</html>