<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="container-form">
            <form action="" class="sign-in">
                <h2>Iniciar sesión</h2>
                <div class="social-networks">
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                </div>
                <span>Use su correo y contraseña</span>
                <div class="container-input">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="container-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Contraseña">
                </div>
                <a href="#">¿Olvidaste la contraseña?</a>
                <button class="button">INICIAR SESIÓN</button>
            </form>
        </div>
        <div class="container-form">
            <form action="" class="sign-up">
                <h2>Registrarse</h2>
                <div class="social-networks">
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                </div>
                <span>Use su correo para registrarse</span>
                <div class="container-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Nombre de usuario">
                </div>
                <div class="container-input">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="container-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Contraseña">
                </div>
                <button class="button">REGISTRARSE</button>
            </form>
        </div>
        <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <h3>¡Bienvenido!</h3>
                <p>Ingrese sus datos personales para ingresar al sitio</p>
                <buttoon class="button" id="btn-sign-up">Registrarse</buttoon>
            </div>
            <div class="welcome-sign-in welcome">
                <h3>¡Hola!</h3>
                <p>Registrese con sus datos personales para ingresar al sitio</p>
                <button class="button" id="btn-sign-in">Iniciar sesión</button>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/login/login.js') }}"></script>
    <script src="https://kit.fontawesome.com/90cd7459d4.js" crossorigin="anonymous"></script>
</body>
</html>