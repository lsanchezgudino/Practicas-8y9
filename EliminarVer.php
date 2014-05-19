<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar</title>
    </head>
    <body bgcolor="EABB10">
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
        <h1>¿Realmente desea Eliminar el sigiente libro?</h1>
        <form method="GET" action="Eliminar.php">
            <?php 
            while ($row = mysql_fetch_array($busqueda)){
            ?>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <table width="80%">
                <tr>
                    <td><label for="id">ID</label></td>
                    <td><label for="autor">Autor</label></td>
                    <td><label for="titulo">T&iacute;tulo</label></td>
                    <td><label for="contenido">Contenido</label></td>
                </tr>
                <tr>
                    <td><label name="id"><?php echo $row['id']; ?></label></td>
                    <td><label name="autor"><?php echo $row['autor']; ?></label></td>
                    <td><label name="titulo"><?php echo $row['titulo']; ?></label></td>
                    <td><label name="contenido"><?php echo $row['detalles']; ?></label></td>
                </tr>
            </table>
           <input type="submit" value="Eliminar">
        </form> 
        <form action="MenuPrincipal.php">
            <input type="submit" value="Cancelar">
        </form>
            <?php 
            }
        }
        mysql_close($conexion);
        ?>
    </body>
</html>
