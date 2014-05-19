<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Session</title>
    </head>
    <body bgcolor="BB11EE">
        <?php
        session_start();
        ?>
        <br/>
        <?php
        $nombreAdmin = "admin";
        $passwordAdmin = "123";
        if($nombreAdmin == $_POST['nombre'] && $passwordAdmin == $_POST['password']){
            $_SESSION['nombre'] = $_POST['nombre'];
            $_SESSION['password'] = $_POST['password'];
            echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
            echo "Bienvenido! ".$_POST['nombre'];
            header("location:MenuPrincipal.php");
        }else{
            if(isset($_SESSION['nombre'])){
                echo "Has iniciado Sesion: ".$_SESSION['nombre'];
            }else{
                echo "Contraseña incorrecta intenta de nuevo";
            }
        }
        ?>
        <br /><a href="Index.php">Ir a Inicio</a>
    </body>
</html>
