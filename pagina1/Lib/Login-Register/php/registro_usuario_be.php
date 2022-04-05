<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $repita_la_contrasena = $_POST['repita_la_contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena, repita_la_contrasena) 
                VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena', '$repita_la_contrasena')";

    //verificar que el correo no se repita en la base de datos
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro correo diferente");
                window.location = "/index2.php");
            </script>
        ';

    }
    

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
    
        
       echo "<script>alert('¡Te has inscripto correctamente!');
       </script>";

       header("Location: index2.php");

    }else{
        echo "No funciono";
    }


?>

