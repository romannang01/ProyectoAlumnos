<?php

$conn = mysqli_connect("localhost","root","","alumnos");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$dir= $_POST['direccion'];
$tel = $_POST['telefono'];
$email = $_POST['correo'];
$fecha = $_POST['fecha_nacimiento'];
$gen = $_POST['genero'];
$carrera = $_POST['carrera'];

$del = "DELETE FROM alumno WHERE alumno_id = '$id'";
$res = mysqli_query($conn,$del);

if($res){
    echo "<script>alert('Usuario borrado'); location.href= '/tablas.php';</script>";
    
}else{
    echo "No se pudo borrar el usuario";
    echo '<script> window.history.go(-1);</script>';
}