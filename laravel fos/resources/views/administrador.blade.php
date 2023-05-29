<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('CSS/administrador.css')}}">
	<link rel="stylesheet" href="{{ asset ('CSS/stylemenu.css')}}">
        <script src="https://kit.fontawesome.com/37a7d1d6c8.js" crossorigin="anonymous"></script>

    <title>FOS</title>
</head>
<body>
    <header class="header"> 
            
        <div class="logo">
                    
                    <input type="checkbox" id="btn-menu" style="appearance: none;"  class="fa-solid fa-lines-leaning">
        <span></span>
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="#">Graficas</a>
                    <a href="#">Ventas</a>
                    <a href="#">Inventario</a>
                    <a href="{{ url ('/domiciliosprinci')}}">Domicilios</a>
                    <a href="#">Youtube</a>
                    <a href="#">Instagram</a>
                </nav>
                <label for="btn-menu" id="equis">✖️</label>
            </div>
        </div>
        </div>
        <label for="toggle"><img src="{{asset ('img/menu.png')}}" alt="" width="50px"></label>
        <input type="checkbox" id="toggle">
        

        <nav class="navigation">

            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Contactanos</a>
                    <ul>
                        <li><a href="#">Whatsapp</a></li>
                        <li><a href="#">Telegram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Llamanos</a></li>


                    </ul>

                </li>
                <li><a href="#">Nuestros Servicios</a>
                    
                </li>
                <li><a href="#">Usuario</a>
                    <ul>

                        <li><a href="{{ url ('/lading')}}">Cuenta</a></li>
                        <li><a href="{{ url ('/lading')}}">Configuracion</a></li>
                        <li><a href="{{ url ('/seción')}}">Cerrar sesion</a></li>

                    </ul>
                </li>



            </ul>


        </nav>
    


</header>
	
    
                
                


    
</body>
</html>