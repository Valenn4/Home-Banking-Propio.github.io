<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;0,700;1,400;1,500&family=Vollkorn:ital,wght@0,600;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&family=Rubik:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@500;600;700&family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fd84ec097a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="main.css">

</head>
<body>

<div class="container">
    <div class="main">

        <div class="titulo">
            <h1 class="titulo-itbank">SOMOS ITBANK.</h1>
            <h1 class="titulo-itbank2">UN BANCO RAPIDO, ADAPTABLE Y 100% SEGURO.</h1>
            <img src="Imagenes/undraw_mobile_pay_re_sjb8.svg" alt="">

            

            <div class="footer">
                <ul class="lista">
                    <li> <a href="">Terminos</a></li>
                    <li> <a href="">Preguntas</a></li>
                    <li> <a href="">Contacto</a></li>
                </ul>
                
            </div>
        </div>
        <div class="acceso">

            <div class="login">
                
                <form action="/ITBANK-Devs-Project/Dashboard/index.html" class="formulario" method="get">
                    <h2 class="titulo_home">Home Banking</h2>
                    <div class="usuario_acceso">
                        <input type="text" name="usuario" placeholder="Usuario" class="usuario">
                        <div class="error-mensaje">
                            <i class="fa-solid fa-xmark"></i>
                            <p class="mensaje-error">Usuario Incorrecto</p>
                        </div>
                    </div>
                    <div class="password_acceso">
                        <div class="conjunto-password">
                            <input type="password" name="password" placeholder="Contraseña" class="password">

                            
                            <i class="fa-regular fa-eye" id="ver"></i>

                            <i class="fa-solid fa-eye-slash" id="cerrar"></i>
                        </div>
                        
                        <div class="error-password">
                            <i class="fa-solid fa-xmark"></i>
                            <p class="mensaje-error">Contraseña Incorrecta</p>
                        </div>
                        <h3 class="cambiar-contraseña">
                            <a href="">Me he olvidado la contraseña</a>
                        </h3>
                        
                    </div>
                    <div class="submit_acceso">
                        <input type="submit" value="Ingresar" id="submit">
                    </div>
                </form>

                <div class="registro">
                    <h2><a href="registro.html" class="recordarC">Recordar Contraseña</a></h2>
                    
                    <div class="linea"></div>
                    
                    <h2><a href="registro.html" class="nueva-cuenta">Crear nueva cuenta</a></h2>

                </div>
            </div>
            
            
            
        </div>
        
    </div>
    
</div>

<script src="index.js"></script>
</body>
</html>