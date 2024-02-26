<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>babyhello</h1>
    <br>
    <form action='{{ route('alumno.store') }}' method="POST" >
        @csrf
        <div>
            <label>Nombre: </label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Apellido: </label>
            <input type="text" name="apellido">
        </div>
        <div>
            <label>Correo: </label>
            <input type="text" name="correo">
        </div>
        <div>
            <label>Telefono: </label>
            <input type="text" name="telefono">
        </div>
        <div>
            <label>Direccion: </label>
            <input type="text" name="direccion">
        </div>
        <div>
            <label>CodigoClase: </label>
            <input type="text" name="codigoClase">
        </div>
        
        <div>
            <button type="submit" class="btn btn-success"> Guardar </button>
        </div>
    </form>
</body>
</html>