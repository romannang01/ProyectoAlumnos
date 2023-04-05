<?php

$conn= mysqli_connect("localhost","root","","alumnos");


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$dir= $_POST['direccion'];
$tel = $_POST['telefono'];
$email = $_POST['correo'];
$fecha = $_POST['fecha_nacimiento'];
$gen = $_POST['genero'];
$carrera = $_POST['carrera'];

$actualizar = "UPDATE alumno SET nombre = '$nombre', direccion = '$dir', telefono= '$tel', correo = '$email',fecha_nacimiento= '$fecha', genero = '$gen', carrera = '$carrera' WHERE alumno_id = '$id'";

$res = mysqli_query($conn,$actualizar);

if($res){
    echo "<script> alert('Usuario actualizado con éxito'); location.href= '/tablas.php';</script>";
}else{
    echo "<script> alert('No se pudo actualizar el usuario); window.history.go(-1); </script>";
}




?>

