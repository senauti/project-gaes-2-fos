<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('CSS/error500.css')}}">
    <title>FOS</title>
</head>
<body>
    <div class="container500">
        <img src="{{ asset ('img/500-PNG-Photos.png')}}" alt="">
        <h1>Internal server error</h1>
        <div class="botonerror">
            <a href="{{ url ('/index')}}"><button>Volver</button></a>
            
        </div>
    </div>
</body>
</html>