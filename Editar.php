<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar</title>
    </head>
    <body bgcolor="C04EBA">
        <?php
        $conexion = mysql_connect('localhost', 'root', '', 'libreria');
        $database = mysql_select_db('libreria');
        session_start();
        if(empty($_SESSION['nombre'])) 
        { 
            header('Location:Index.php');
        }
        else
        {
            $id = $_GET['id'];
            $busqueda = mysql_query("SELECT * FROM libros WHERE id=$id"); 
        ?>
        <form method="POST" action="Actualizar.php">
        <h2>Editar</h2>
        <?php 
        while ($row = mysql_fetch_array($busqueda)){
        ?>
        <label for="id" > ID </label><br \>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<input type="text" name="id" value="<?php echo $row['id']; ?>" disabled> <br \>
	<label for="autor" > Autor </label><br \>
	<input type="text" name="autor" value="<?php echo $row['autor']; ?>"><br \>
	<label for="titulo"> T&iacute;tulo </label><br \>
	<input type="text" name="titulo" value="<?php echo $row['titulo']; ?>"><br \>
	<label for="contenido"> Contenido </label><br \>
	<textarea rows="10" cols="40" name="contenido"><?php echo $row['detalles']; ?></textarea>
        <?php 
            }
        ?>
        <input type="submit" value="Guardar">
        <a href="MenuPrincipal.php" class="etiqueta">Regresar</a>
        </form>
        <?php
            }
        ?>
    </body>
</html>
