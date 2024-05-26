<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('teacher.update', $dato) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf {{--  token o seguridad --}}
        <label class="form-label">
            Dni:
            <br>
            <input class="form-control" type="text" name="dni" value="{{old('dni',$dato->dni)}}" required>
        </label>
        <br>
        <label class="form-label">
            Nombre:
            <br>
            <input class="form-control" type="text" name="nombre_profesor" value="{{old('nombre_profesor',$dato->dni)}}" required>
        </label>
        <br>
        <label class="form-label">
            Direccion:
            <br>
            <input class="form-control" type="text" name="direccion" value="{{old('direccion',$dato->dni)}}" required>
        </label>
        <br>
        <label class="form-label">
            Telefono:
            <br>
            <input class="form-control" type="text" name="telefono" value="{{old('telefono',$dato->dni)}}" required>
        </label>
        <br>
        <br>
        <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>