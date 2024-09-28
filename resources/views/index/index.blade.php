<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentacion</title>
    <script src="https://kit.fontawesome.com/90cd7459d4.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="nav-bar">
        <div class="nav-bar-container">
            <i class="fa-solid fa-couch fa-3x"></i>
            <h1 class="name">Salas Britt</h1>
        </div>
    </div>
    <div class="body-container">
        <div class="presentacion">
            <div class="parrafo">
                <h1>Bienvenidos a Salas Britt</h1>
                <p>Somos fabricantes de todo tipo de muebles para el hogar,</p>
                <p>donde tenemos las mejores salas, sofacamas, sillones y demas,</p>
                <p>ofreciendote los mejores diseños, elegancia y sobretdo,</p>
                <p>comodidad para tu horar o cualquier espacio deseado.</p>

                <p>¡¡No pierdas la oportunidad de conocernos!!</p>
                <p>Y adquiere los mejores muebles</p>
                <p>para tu hogar. Te esperamos y quedamos a la orden.</p>

                <p>Venta de mayoreo y menudeo.</p>
            </div>
            <img src="{{ asset('imagenes/modelo_1.png') }}">
        </div>
        <div class="contacto">
            <img src="{{ asset('imagenes/modelo_2.png')}}">
            <div class="redes">
                <!-- <h6>¡¡Contactanos!!</h6>
                <h6>Visita nuestas redes sociales para realizar tu pedido</h6>
                <h6>O en el domicilio </h6> -->
                <h2>¡¡Contactanos!!</h2>
                <p>Visita nuestras redes sociales para realizar tu pedido.</p>
                <p>O en el domicilio.</p>
                <a href="https://www.facebook.com/profile.php?id=100089738996503"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>
</body>
<style>
    body{
        background-color: white;
        margin: 0;
    }

    @media (max-width: 768px) {
        .nav-bar-container i {
            font-size: 1.5rem; /* Reduce el tamaño del ícono en pantallas pequeñas */
        }

        .nav-bar-container .name {
            font-size: 1.2rem; /* Reduce el tamaño del texto en pantallas pequeñas */
            text-align: center; /* Centra el texto si es necesario */
            margin-top: 10px; /* Añade margen superior si es necesario */
        }
    }

    .nav-bar{
        padding: 20px;
        background-color: #7C1F4E;
        max-width: 100%;
    }

    .nav-bar-container{
        font-family: Times New Roman, serif;
        font-size: 10px;
        color: white;
        display: flex;
        align-items: center;
        padding: 5px;
    }
    .nav-bar-container, .fa-solid, .name{
        margin: 5px;
    }

    .body-container{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px;
        flex-direction: column;
    }

    .presentacion{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .presentacion h1, p{
        font-family: Times New Roman, serif;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .parrafo{
        width: 600px;
    }

    .parrafo, .model_1{
        margin: 20px;
    }

    @media (max-width: 768px) {
        .container {
            width: 100%;
            padding: 0 10px;
        }
    }

    @media (max-width: 480px) {
        .card {
            flex: 1 1 100%;
        }
    }

    img {
        max-width: 100%; /* Hace que la imagen sea responsive y se ajuste al contenedor */
        height: auto; /* Mantiene la relación de aspecto */
        border-radius: 20px;
        box-shadow:  4px 4px 10px #000;
        background-color: #C1C2C2;
    }

    .contacto{
        display: flex;
        justify-content: center;
        align-content: center;
    }

    button{
        height: 40px;
        width: 40px;
        color: none;
    }
    
    .redes, img, .presentacion, .contacto{
        margin: 10px;
    }
</style>
</html>