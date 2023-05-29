<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FOS</title>
        <link rel="stylesheet" href="{{ asset ('CSS/agendarenvios.css')}}">
        <link rel="stylesheet" href="{{ asset ('CSS/stylemenu.css')}}">
        <link rel="stylesheet" href="{{ asset ('CSS/domicilios.css')}}">
        <script src="https://kit.fontawesome.com/37a7d1d6c8.js" crossorigin="anonymous"></script>

    </head>
    
    <body>
        <header class="header">
            
            <div class="logo">☰ FOS</a> </div>
            <label for="toggle"><img src="{{ asset ('img/menu.png')}}" alt="" width="50px"></label>
            <input type="checkbox" id="toggle">
            

            <nav class="navigation">

                <ul>
                    <li><a href="{{ url ('/index')}}">Inicio</a></li>
                    <li><a href="{{ url ('/contacto')}}">Contactanos</a>
                        <ul>
                            <li><a href="{{ url ('/lading')}}">Whatsapp</a></li>
                            <li><a href="{{ url ('/lading')}}">Telegram</a></li>
                            <li><a href="{{ url ('/lading')}}">Facebook</a></li>
                            <li><a href="{{ url ('/lading')}}">Instagram</a></li>
                            <li><a href="{{ url ('/lading')}}">Llamanos</a></li>


                        </ul>

                    </li>
                    <li><a href="{{ url ('/servicios')}}">Nuestros Servicios</a>
                        <ul>

                            <li><a href="{{ url ('/lading')}}">Administrar tu negocio</a>
                                
                            </li>
                            <li><a href="{{ url ('/lading')}}">Vende tus productos</a>
                                
                            </li>
                            <li><a href="{{ url ('/lading')}}">Administra tus domicilios</a>
                                
                            </li>

                        </ul>
                    </li>
                    <li><a href="{{ url ('/seción')}}">Inicia Sesion</a>
                        <ul>

                            <li><a href="{{ url ('/registro')}}">Registrate</a></li>
                        </ul>
                    </li>



                </ul>


            </nav>
        


    </header>
        <main>
            <!--Grupo: Numero del domicilio-->
            <form action="{{ url ('/lading')}}" class="formulario" id="formulario">
                <div class="formulario__grupo formulario__grupo-correcto" id="grupo__usuario">
                    <label for="usuario" class="formulario__label">No Domicilio</label>
                    <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" name="usuario" id="usuario" placeholder="No domicilio" required>
                        <i class="formulario__validacion-estado fa-solid fa-circle-xmark" style="color: #ae1e1e;"></i>
                    </div>
                    <p class="formulario__input-error">El numero del domicilio debe ser con numeros</p>
                </div>
                <!--Grupo: Id del usuario-->
                <div class="formulario__grupo" id="grupo__idusuario">
                    <label for="idusuario" class="formulario__label">Id Usuario</label>
                    <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" name="idusuario" id="idusuario"
                            placeholder="id usuario" required>
                        <i class="formulario__validacion-estado fa-solid fa-circle-xmark" style="color: #ae1e1e;"></i>
                    </div>
                    <p class="formulario__input-error">El id usuario debe ser con numeros</p>
                </div>
                <!--Grupo: correo Usuario-->
                <div class="formulario__grupo" id="grupo__correo">
                    <label for="correo" class="formulario__label">Correo Usuario</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input" name="correo" id="correo"
                            placeholder="Correo usuarios" required>
                        <i class="formulario__validacion-estado fa-solid fa-circle-xmark" style="color: #ae1e1e;"></i>
                    </div>
                    <p class="formulario__input-error">El correo solo puede contener letras, numeros, guiones y guion bajo. </p>
                </div>
                <!--Grupo: correo Usuario 2-->
                <div class="formulario__grupo" id="grupo__correo2">
                    <label for="correo2" class="formulario__label">Confirma el correo</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input" name="correo2" id="correo2"
                            placeholder="Confirma el correo" required>
                        <i class="formulario__validacion-estado fa-solid fa-circle-xmark" style="color: #ae1e1e;"></i>
                    </div>
                    <p class="formulario__input-error">El correo no es identico</p>
                </div>
                <!--Grupo: Fecha Domicilio-->
                <div class="formulario__grupo" id="grupo__fechadomicilio">
                    <label for="grupo__fechadomicilio" class="formulario__label">Fecha Domicilio</label>
                    <div class="formulario__grupo-input">
                        <input type="date" class="formulario__input" name="grupo__fechadomicilio" id="grupo__fechadomicilio"
                            placeholder="Hora Domicilio" required>
                        <i class="formulario__validacion-estado fa-solid fa-circle-xmark" style="color: #ae1e1e;"></i>
                    </div>
                    <p class="formulario__input-error">Por favor ingresa una fecha</p>
                </div>
                <!--Grupo: Hora Domicilio-->
                <div class="formulario__grupo" id="grupo__horadomicilio">
                    <label for="grupo__horadomicilio" class="formulario__label">Hora Domicilio</label>
                    <div class="formulario__grupo-input">
                        <input type="time" class="formulario__input" name="grupo__horadomicilio" id="grupo__horadomicilio"
                            placeholder="Hora Domicilio" required>
                        <i class="formulario__validacion-estado fa-solid fa-circle-xmark" style="color: #ae1e1e;"></i>
                    </div>
                    <p class="formulario__input-error">Ingresa una hora</p>
                </div>
                <!--Grupo: Tipo Transporte-->
                <div class="formulario__grupo" id="grupo__tipotransporte">
                    <label for="grupo__tipotransporte" class="formulario__label">Tipo Transporte</label>
                    <div class="formulario__grupo-input">
                        <input list="Tipo transporte" class="formulario__input" name="grupo__tipotransporte" id="grupo__tipotransporte"placeholder="Hora Domicilio" required>
                            <datalist id="Tipo transporte">
                                <option value="servientrega"></option>
                                <option value="Inter rapidisimo"></option>
                                <option value="Coordinadora"></option>
                                <option value="DHL"></option>
                                <option value="Grupo TCC"></option>
                                <option value="Picap"></option>
                            </datalist>
                        <i class="formulario__validacion-estado fa-solid fa-circle-xmark" style="color: #ae1e1e;"></i>
                    </div>
                    <p class="formulario__input-error">Ingresa una hora</p>
                </div>
                <!--Grupo: Terminos y condiciones -->
                <div class="formulario__grupo" id="grupo__terminos">
                    <label class="formulario__label">
                        <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos" required>
                        <p class="aceptot">Acepto los terminos y condiciones</p> 
                    </label>
                </div>
                <div class="formulario__mensaje" id="formulario__mensaje"> 
                    <p><i class="fa-solid fa-triangle-exclamation" style="color: #ff0000;"> <b>Error</b> Por favor revisa la informacion.</i></p>
                </div>
                <div class="formular__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Agendar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Agendado de manera exitosa</p>
                </div>
                <div >
                    <button type="submit" class="formulario__btn2 ">Ver envios</button>
                </div>
                <div>
                    <button type="button" class="formulario__btn3"> Volver</button>
                </div>
                
            </form>
        </main>
        <script src="{{ asset ('js/agendarenvios.js')}}"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    </body>
</html>