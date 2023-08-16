<?php
session_start();
include_once("../../config/DBConect.php");
include_once("../../config/Config.php");

if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $horas = $_POST['horas'];
}

$conexion = new Database;  
$result = $conexion->CrearMateria($nombre, $horas);

header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);
?>
