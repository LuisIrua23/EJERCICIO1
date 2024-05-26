<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
                <h1>Registrar Estudiante</h1>
                <br>
                <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf {{-- token o seguridad  --}}
                    <label  class="form-label">
                        Expediente
                        <br>
                        <input class="form-control" type="text" name="expediente"  class="form-control" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Nombre
                        <br>
                        <input class="form-control"  type="text" name="nombre_estudiante" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        apellido
                        <br>
                        <input class="form-control"  type="text" name="apellido" required>
                    </label>
                    
                    
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
                    <br>
                    <br>
                    <br>
                </form>
            </center>
</body>
</html>