<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalles</title>
    </head>
    <body bgcolor="DDEEAA">
        <?php
        $conexion = mysql_connect('localhost', 'root', '', 'libreria');
        $database = mysql_select_db('libreria');
        session_start();
        if(empty($_SESSION['nombre'])){ 
            header('Location:Index.php');
        }else{
            $id = $_GET['id'];
            $busqueda = mysql_query("SELECT * FROM libros WHERE id=$id"); 
            ?>
            <h1>Detalles</h1>
            <?php 
            while ($row = mysql_fetch_array($busqueda)){
            ?>
            <label for="id" class="2">ID</label><br>
            <input type="text" name="id" value="<?php echo $row['id']; ?>" disabled> <br \>
            <label for="autor"> Autor </label><br \>
            <input type="text" name="autor" value="<?php echo $row['autor']; ?>" disabled><br \>
            <label for="titulo"> T&iacute;tulo </label><br \>
            <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" disabled><br \>
            <label for="contenido">Contenido</label><br \>
            <textarea rows="10" cols="40" name="contenido" disabled><?php echo $row['detalles'];?>	
            </textarea><br \>
            <?php 
            }
            ?>
            <a href="MenuPrincipal.php">Regresar</a>
            <?php
        }
        ?>
    </body>
</html>
