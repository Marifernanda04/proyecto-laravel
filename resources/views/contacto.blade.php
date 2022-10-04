<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>CONTACTO</title>
</head>

<body>
    <h1>Contacto</h1><br>
    <form action="/contacto" method="POST">
        @csrf
        <label for="nombre">Introduce tu Nombre</label><br>
        <input type="text" name="nombre" placeholder="hola" value="{{old('nombre') ?? $nombre}}"><br>
        <br>

        <label for="correo">Introduce tu Email</label><br>
        <input type="email" name="correo" value="{{$correo}}" placeholder="df45@hotmail.com" ><br>
        <br>

        <label for="mensaje">Comentarios</label><br>
        <textarea name="mensaje" rows="4" cols="20" placeholder="COMENTARIOS"></textarea>
        <br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>
