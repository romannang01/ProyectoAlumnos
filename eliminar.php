<?php

$conn= mysqli_connect("localhost","root","","alumnos");

$id = $_GET["id"];




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
    <title>Eliminar Registro</title>
</head>
<body>
    
<div align="center">
    <form action= "delete.php" method= "post">
    <table class="table table-bordered">
        <tr>
            
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha de Nacimiento</th>
            <th>Género</th>
            <th>Carrera</th>
        </tr>
        
     <tr>
        <?php

   
   


$sel = "SELECT * FROM alumno WHERE alumno_id = '$id'";
    $res = mysqli_query($conn,$sel);



while($row = mysqli_fetch_assoc($res)) {   ?>
            <input type= "hidden" name= "id" id= "id" value="<?php echo $row['alumno_id']; ?>">
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['direccion']; ?></td> 
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['fecha_nacimiento']; ?></td>
            <td><?php echo $row['genero']; ?></td>
            <td>
            <select  name="carrera" id="carrera" > 
        <option value="TS en Analista en Sistemas" <?php if($row['carrera'] == 'TS en Analista en Sistemas')echo 'selected == "selected"';?>>TS en Analista en Sistemas</option>
        <option value="TS en Mantenimiento Industrial" <?php if($row['carrera'] == 'TS en Mantenimiento Industrial')echo 'selected == "selected"';?>> TS en Mantenimiento Industrial</option>
        <option value="TS en Logística"<?php if($row['carrera'] == 'TS en Logística')echo 'selected == "selected"';?>>TS en Logística</option>
    
    </select>
            </td>
            <td> <input type= "submit" class = "btn btn-danger" style= "font-family:'Raleway','sans-serif';" value = "Eliminar"> </td>
    <tr>
        
    <?php } ?>
    </table>

</form>

</div>

</body>
</html>