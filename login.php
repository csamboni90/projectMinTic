<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/9ccbfdace8.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" >
    <title>Bienvenido a mi Formulario</title>
</head>

<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <div class="nav">
                    <h1 class="logo"><a class="nav-link" href="index.html">HBB</a></h1>
                    
                    <button class="nav-toggle">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <ul class="nav-menu">
                        <li class="nav-items"><a class="nav-menu-link" href="../index.html">Home</a></li>
                        <li class="nav-items"><a class="nav-menu-link current" href="../html/login.html">Login</a></li>
                        <li class="nav-items"><a class="nav-menu-link" href="../html/about.html">About</a></li>
                        <li class="nav-items"><a class="nav-menu-link " href="../html/services.html">Services</a></li>
                        <li class="nav-items"><a class="nav-menu-link" href="../html/contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido al Hotel HBB</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class="bx bxl-instagram"></i>
                </div>
                <div class="border-icon">
                    <i class="bx bxl-linkedin"></i>
                </div>
                <div class="border-icon">
                    <i class="bx bxl-facebook-circle" ></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input class="in" type="text" placeholder="Nombre" >
            <input class="in" type="email" placeholder="Email" name="user-up">
            <input class="in" type="password" placeholder="Contraseña" name="password-up">
            <input class="in" type="button" value="Registrarse" name="registrar">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class="bx bxl-instagram"></i>
                </div>
                <div class="border-icon">
                    <i class="bx bxl-linkedin"></i>
                </div>
                <div class="border-icon">
                    <i class="bx bxl-facebook-circle" ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <?php
                include("conexion.php");
                include("controlador.php");
            ?>

            <input class="in" type="email" placeholder="Email o Usuario" name="user">
            <input class="in" type="password" placeholder="Contraseña" name="password">
            <input class="in" type="button" value="Iniciar Sesion" name="btningresar">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script src="../js/menu.js"></script>
</body>

</html>