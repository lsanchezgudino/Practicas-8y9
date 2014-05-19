<?php
$conexion = mysql_connect('localhost', 'root', '', 'libreria');
$database = mysql_select_db('libreria');
session_start();
if(empty($_SESSION['nombre'])) { 
    header('Location:Index.php');
}else{
    $id = $_GET['id'];
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $insertar = mysql_query("INSERT INTO libros (autor, titulo, detalles) VALUES ('$autor','$titulo','$contenido')");
    if ($insertar){
        header('Location:MenuPrincipal.php');
    }else{
        echo "Error al guardar <br \>".mysql_error();
    }
    $conexion->close();
}
?>
