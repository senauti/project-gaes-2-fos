<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('CSS/error404.css')}}">
    <title>FOS</title>
</head>
<body>
    <div class="container404">
        <img src="{{asset ('img/error-404-page-3k.jpg')}}" alt="">
        <h1>Pagina no encontrada</h1>
        <div class="botonerror">
            <a href="{{ url ('/index')}}"><button>Volver</button></a>
            
        </div>
    </div>
</body>
</html>