<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina Principal</title>
    </head>
    <body bgcolor="8FBA24">
        <?php
        $conexion = mysql_connect('localhost', 'root', '', 'libreria');
        $database = mysql_select_db('libreria');
        if(isset($_SESSION['nombre'])) { 
        header('Location:Index.php');
        }else {
            $result = mysql_query("SELECT id, autor, titulo FROM libros") or die(mysql_error());
            echo "<h2>Bienvenido! ". /*$_SESSION['nombre'] .*/"</ h2>";
        ?>    
            <form action="Nuevo.php">
            <input type="submit" value="Nuevo">
            </form>
            <?php
            echo '<table border="0" width="100%">';
            ?>
            <tr>
            <td>ID</td>
            <td>Autor</td>
            <td>T&iacute;tulo</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <?php
            while ($row = mysql_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["autor"]."</td>";
                echo "<td>".$row["titulo"]."</td>";
                ?>
                <td>
                <form method='GET' action='Ver.php'>
                <input type='hidden' value='<?php echo $row['id']; ?>' name="id">
                <input type="submit" value='ver'></td>
                </form>
                <form method='GET' action='Editar.php'>
                <input type='hidden' value='<?php echo $row['id']; ?>' name="id"> 
                <td><input type='submit' value='editar'></td>
                </form>
                <form method='GET' action='EliminarVer.php'>
                <input type='hidden' value='<?php echo $row['id']; ?>' name="id"> 
                <td><input type='submit' value='eliminar'></td>
                </form>
                </tr>
            <?php 
            }
            echo "</table>";
            ?>
            <form method="POST" action="Cerrar.php">
                <input type="submit" value="Cerrar Sesion">
            </form>
        <?php
        }
        ?>
    </body>
</html>
