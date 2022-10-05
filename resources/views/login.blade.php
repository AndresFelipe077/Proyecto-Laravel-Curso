@extends('layouts.plantilla')

@section('title','login/nosotros')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilosLogin.css">
    <script type="javaScript.js"></script>
    

</head>
<body class="body_Login">

    

    <content class="content_login">
        <h1 id="titulo-Auxilitos"><img id="image_Title" src="Images/botiquin.png" height="50px" width="50px"> MIS PRIMEROS AUXILITOS <img id="image_Title" src="Images/botiquin.png" height="50px" width="50px"></h1>
            
            <form action="" method="POST" class="form">
                <h1 id="titulo">Login</h1>
                <div class="grupo">
                    <input type="email" id="correo" placeholder="Correo" required>
                </div>
                <div class="grupo">
                    <input type="password" id="contrasena" placeholder="Contraseña" required></input>
                </div>              

                <div class="grupo">
                    <button id="btn_loguearse" class="submit" onclick="location.href='{{route('menu')}}'">ACEPTAR</button>
                </div>

                <div class="content_password_Olvida">
                    <a id="text_password" href="recuperarContrasena.html"> ¿Has olvidado tu contraseña?</a>
                </div>

                <div class="grupo">
                    <text>¿No tienes cuenta?</text>
                    <button type="submit" id="btn_registrarse" onclick="location.href='{{route('registro')}}'">registrarse</button>
                       
                </div>

                <div class="grupo">
                    <img class="img-btn-Facebook" src="Images/login/Facebook.svg" onclick="location.href='{{route('cursos.index')}}'">
                    <img class="img-btn-Google" src="Images/login/Google.svg" onclick="location.href='{{route('home')}}'">
                </div>

                

                <footer class="footer">

                    copyright &copy SENIORS_SENA;
            
                </footer>

            </form>

        
            

    </content>

    

</body>
</html>