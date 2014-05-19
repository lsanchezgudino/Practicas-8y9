<?php
$conexion = mysql_connect('localhost', 'root', '', 'libreria');
$database = mysql_select_db('libreria');
session_start();
if(empty($_SESSION['nombre'])) { 
    header('Location:Index.php');
}else{
    $id = $_GET['id'];
    $borrar = mysql_query("DELETE FROM libros WHERE id='$id'");
    if ($borrar){
            header('Location:MenuPrincipal.php');		
    }else{
            echo "Error al guardar <br \>".mysql_error();
    }
}
$conexion->close();
?>
