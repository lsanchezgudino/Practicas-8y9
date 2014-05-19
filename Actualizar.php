<?php
    $conexion = mysql_connect('localhost', 'root', '', 'libreria');
    $database = mysql_select_db('libreria');
    session_start();
    if(empty($_SESSION['nombre'])) { 
             header('Location:Index.php');
    }else{
        $id = $_POST['id'];
        $autor = $_POST['autor'];
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        $insertar = mysql_query("UPDATE libros SET id='$id', autor='$autor', titulo='$titulo', detalles='$contenido' WHERE id='$id'");
        if ($insertar){
                header('Location:MenuPrincipal.php');
	}else{
            echo "Error al guardar <br \>".mysql_error();
	}
    }
?>
