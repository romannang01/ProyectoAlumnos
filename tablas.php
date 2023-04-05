<?php

$conn= mysqli_connect("localhost","root","","alumnos");


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="tablas.css" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    
<div align="center">
   
    <table class="table table-bordered">
        <thead>
        
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha de Nacimiento</th>
            <th>Género</th>
            <th>Carrera</th>
        
        <tbody>
        <tr>


        <?php

$sql = "SELECT * FROM alumno";
$res = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($res)) { ?>

        <td><?php echo $row['alumno_id']; ?> </td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['direccion']; ?></td> 
        <td><?php echo $row['telefono']; ?></td>
        <td><?php echo $row['correo']; ?></td>
        <td><?php echo $row['fecha_nacimiento']; ?></td>
        <td><?php echo $row['genero']; ?></td>
         <td><?php echo $row['carrera']; ?></td>
        <td><button class="btn btn-danger"><a href="update.php?id=<?php echo $row['alumno_id']; ?>">Actualizar</a></button></td>
        <td> 
 <td><button class= "btn btn-warning"><a href="eliminar.php?id=<?php echo $row['alumno_id']; ?>">Eliminar</a></td>
                 
    <tr>
    <?php }  ?>
</tbody> 
    
    </table>

</div>

</body>
</html>