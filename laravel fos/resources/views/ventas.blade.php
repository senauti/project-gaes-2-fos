<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('CSS/ventas.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>FOS</title>
</head>
<body>
    <header class="cabecera">
        <a href="#" class="logo">
            <img src="{{asset ('img/logo_oscuro_horizontal-removebg-preview.png')}}" alt="">
        </a>
        <nav class="barraNav">
            <a href="#home">Inicio</a>
            <a href="#home">Inicio</a>
            <a href="#home">Inicio</a>
            <a href="#home">Inicio</a>
            <a href="#home">Inicio</a>
            <a href="#home">Inicio</a>
            <a href="#home">Inicio</a>
        </nav>
        <div class="iconos">
            <div class="fas fa-search" id="buscar-btn"></div>
            <div class="fas fa-shopping-cart" id="carro-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="buscarforma">
            <input type="search" id="buscar-caja" placeholder="Busca aqui...">
            <label for="buscar-caja" class="fas fa-search"></label>
        </div>

        <div class="carrocompras-cont">
            <div class="carrocompra">
                <span class="fas fa-times"></span>
                <img src="{{asset ('img/item-removebg-preview.png')}}" alt="">
                <div class="content">
                    <h3>Articulo del carrito 1</h3>
                    <div class="precio">$20.000</div>
                </div>
            </div>
            
            <div class="carrocompra">
                <span class="fas fa-times"></span>
                <img src="{{ asset ('img/item-removebg-preview.png')}}" alt="">
                <div class="content">
                    <h3>Articulo del carrito 2</h3>
                    <div class="precio">$20.000</div>
                </div>
            </div>

            <div class="carrocompra">
                <span class="fas fa-times"></span>
                <img src="{{asset ('img/item-removebg-preview.png')}}" alt="">
                <div class="content">
                    <h3>Articulo del carrito 3</h3>
                    <div class="precio">$20.000</div>
                </div>
            </div>

            <div class="carrocompra">
                <span class="fas fa-times"></span>
                <img src="{{asset ('img/item-removebg-preview.png')}}" alt="">
                <div class="content">
                    <h3>Articulo del carrito 4</h3>
                    <div class="precio">$20.000</div>
                </div>
            </div>

            <a href="#" class="boton">Comprar</a>
        </div>
    </header>

    <section class="productos" id="productos">
        
        <div class="contenedor">
            <div class="encabezado">
             <h1>PRODUCTOS</h1>
            </div>
            <div class="productos">
     
             <div class="producto">
                 <div class="imagen">
                    <img src="{{asset ('img/imagen1-removebg-preview.png')}}" alt="">
                 </div>
                 <div class="precio">
                 <h2>Antifaz</h2>
                 <span>$ 15.000</span>
                 </div>
                 <p>Antifaz femenino</p>
                 <div class="estrellas">
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                 </div>
                 <div class="comprar">
                 <button><a href="formularioventas.html" style="color: black;">Agregar al carrito</a> </button>
                 </div>
             </div>
     
             <div class="producto">
                 <div class="imagen">
                    <img src="{{asset ('img/imagen2-removebg-preview.png')}}" alt="">
                 </div>
                 <div class="precio">
                    <h2>juguete</h2>
                    <span>$ 40.000</span>
                 </div>
                 <p>juguete bebe </p>
                 <div class="estrellas">
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                 </div>
                 <div class="comprar">
                    <button><a href="formularioventas.html" style="color: black;">Agregar al carrito</a></button>
                 </div>
             </div>

             <div class="producto">
                 <div class="imagen">
                    <img src="{{asset ('img/imagen3-removebg-preview.png')}}" alt="">
                 </div>
                 <div class="precio">
                    <h2>Piñata</h2>
                    <span>$ 60.000</span>
                 </div>
                 <p>piñata multicolor </p>
                 <div class="estrellas">
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                 </div>
                 <div class="comprar">
                    <button>Agregar al carrito</button>
                 </div>
             </div>

             <div class="producto">
                 <div class="imagen">
                    <img src="{{asset ('img/imagen4-removebg-preview.png')}}" alt="">
                 </div>
                 <div class="precio">
                    <h2>Caja</h2>
                    <span>$ 30.000</span>
                 </div>
                 <p>Caja prediseñada </p>
                 <div class="estrellas">
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                 </div>
                 <div class="comprar">
                    <button>Agregar al carrito</button>
                 </div>
             </div>

             <div class="producto">
                 <div class="imagen">
                   <img src="{{asset ('img/imagen5-removebg-preview.png')}}" alt="">
                 </div>
                 <div class="precio">
                   <h2>Tren</h2>
                   <span>$ 30.000</span>
                 </div>
                 <p>Tren de colore </p>
                 <div class="estrellas">
                   <i class="fa-sharp fa-solid fa-star"></i>
                   <i class="fa-sharp fa-solid fa-star"></i>
                   <i class="fa-sharp fa-solid fa-star"></i>
                   <i class="fa-sharp fa-solid fa-star"></i>
                   <i class="fa-sharp fa-solid fa-star"></i>
                 </div>
                 <div class="comprar">
                   <button>Agregar al carrito</button>
                 </div>
             </div>

             <div class="producto">
                 <div class="imagen">
                  <img src="{{asset ('img/imagen6-removebg-preview.png')}}" alt="">
                 </div>
                 <div class="precio">
                  <h2>Globo</h2>
                  <span>$ 15.000</span>
                 </div>
                 <p>Globo decorado </p>
                 <div class="estrellas">
                  <i class="fa-sharp fa-solid fa-star"></i>
                  <i class="fa-sharp fa-solid fa-star"></i>
                  <i class="fa-sharp fa-solid fa-star"></i>
                  <i class="fa-sharp fa-solid fa-star"></i>
                  <i class="fa-sharp fa-solid fa-star"></i>
                 </div>
                 <div class="comprar">
                  <button>Agregar al carrito</button>
                 </div>
             </div>
            </div>
         </div>
       

    </section>

    <script src="{{asset ('js/script.js')}}"></script>
</body>
</html>