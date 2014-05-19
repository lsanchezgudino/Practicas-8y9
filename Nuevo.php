<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo</title>
    </head>
    <body bgcolor="ABBCC0">
        <?php
        $conexion = mysql_connect('localhost', 'root', '', 'libros');
        $database = mysql_select_db('libros');
        session_start();
        if(empty($_SESSION['nombre'])) { 
            header('Location:Index.php');
        }else {
        ?>
        <form method="POST" action="Guardar.php">
        <h1>Ingresar Nuevo</h1>
        <label for="autor" >Autor</label><br \>
        <input type="text" name="autor"><br \>
        <label for="titulo"> T&iacute;tulo </label><br \>
        <input type="text" name="titulo"><br \>
        <label for="contenido">Contenido</label><br \>
        <textarea rows="10" cols="40" name="contenido" ></textarea><br \>
        <input type="submit" value="Guardar">
        <a href="MenuPrincipal.php">Regresar</a>
        </form>
        <?php	
	}
        ?>
    </body>
</html>
