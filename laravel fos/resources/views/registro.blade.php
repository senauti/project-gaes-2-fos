<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FOS</title>
        <link rel="stylesheet" href="{{ asset ('CSS/style.css')}}">
        <link rel="stylesheet" href="{{ asset ('CSS/stylemenu.css')}}">
        <link rel="stylesheet" href="{{ asset ('CSS/registro.css')}}">
    </head>
    <body>
        <header class="header">

            <div class="logo"><a href="{{ url ('/index')}}">☰ FOS</a> </div>
            <label for="toggle"><img src="{{ asset ('img/menu.png')}}" alt="" width="50px"></label>
            <input type="checkbox" id="toggle">


            <nav class="navigation">

                <ul>
                    <li><a href="{{ url ('/index')}}">Inicio</a></li>
                    <li><a href="{{ url ('/contacto')}}">Contactanos</a>
                        <ul>
                          <li><a href="{{ url ('/contacto')}}">Contacta directamente</a></li>
                            <li><a href="{{ url ('/lading')}}">Whatsapp</a></li>
                            <li><a href="{{ url ('/lading')}}">Telegram</a></li>
                            <li><a href="{{ url ('/lading')}}">Facebook</a></li>
                            <li><a href="{{ url ('/lading')}}">Instagram</a></li>
                            <li><a href="{{ url ('/lading')}}">Llamanos</a></li>


                        </ul>

                    </li>
                    <li><a href="{{ url ('/servicios')}}">Nuestros Servicios</a>
                        
                    </li>
                    <li><a href="{{ url ('/seción')}}">Inicia Sesion</a>
                        <ul>

                            <li><a href="{{ url ('/registro')}}">Registrate</a></li>
                        </ul>
                    </li>



                </ul>


            </nav>



        </header>
        <!DOCTYPE html>
        <html lang="es" dir="ltr">
          <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="style.css">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
           </head>
        <body>
          <div class="containerr">
            <div class="title">Registrate</div>
            <div class="content">
              <form action="error404.html">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Nombre completo</span>
                    <input type="text" placeholder="Enter your name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Nombre de usuario</span>
                    <input style="color: black;" type="text" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Correo electronico</span>
                    <input type="email" placeholder="Enter your email" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Numero de telefono</span>
                    <input type="number" placeholder="Enter your number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Contrasena</span>
                    <input type="password" placeholder="Enter your password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Confirma tu contrasena</span>
                    <input type="password" placeholder="Confirm your password" required>
                  </div>
                </div>
                <div class="gender-details">
                  <input type="radio" name="gender" id="dot-1">
                  <input type="radio" name="gender" id="dot-2">
                  <input type="radio" name="gender" id="dot-3">
                  <span class="gender-titles" style="color: white;">Genero</span>
                  <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender" required>Hombre </span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender" required>Mujer</span>
                  </label>
                  <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender" required>Prefiero no decirlo</span>
                    </label>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" value="Registrate">
                </div>
              </form>
            </div>
          </div>
        
        </body>
        </html>
        
    </body>
</html>