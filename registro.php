<?php

$conn= mysqli_connect("localhost","root","","alumnos");



$nombre = $_POST['nombre'];
$dir= $_POST['direccion'];
$tel = $_POST['telefono'];
$email = $_POST['correo'];
$fecha = $_POST['fecha_nacimiento'];
$gen = $_POST['genero'];
$carrera = $_POST['carrera'];

$sql = "INSERT INTO alumno(nombre,direccion,telefono,correo,fecha_nacimiento,genero,carrera) VALUES('$nombre','$dir','$tel','$email','$fecha','$gen','$carrera')";
$res = mysqli_query($conn,$sql);

header('location:tablas.php');
?>

