<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Y Registro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <script src="librerias/jquery-3.6.0.min.js"></script>
</head>
<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aun no tienes cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesion</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
            </div>
            <!--Formulario de login y registro-->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="login_usuario_be.php"method="POST" class="formulario__login">

                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!-- Registro -->
                <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password"placeholder="Contraseña" name="contrasena">
                    <input type="password" placeholder="Repita la contraseña" name="repita_la_contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    
   <script src="../assets/js/scrip.js"></script>
</body>
</html>