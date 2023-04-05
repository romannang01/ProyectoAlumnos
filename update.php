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
    <title>Actualizar datos</title>
</head>
<body>
    
<div align="center">
    <form action= "modificar.php" method = "post">
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
             <input type= "hidden" name= "id" id= "id" value= "<?php echo $row['alumno_id']; ?>">
            <td><input type="text" name= "nombre" id= "nombre" value="<?php echo $row['nombre']; ?>"></td>
            <td><input type="text" name= "direccion" id= "direccion" value="<?php echo $row['direccion']; ?>"></td> 
            <td><input type= "text" name= "telefono" id= "telefono" value="<?php echo $row['telefono']; ?>"></td>
            <td><input type= "text" name= "correo" id= "correo" value= "<?php echo $row['correo']; ?>"></td>
            <td><input type= "text" name= "fecha_nacimiento" id= "fecha_nacimiento" value= "<?php echo $row['fecha_nacimiento']; ?>"></td>
            <td><input type= "text" name= "genero" id= "genero" value= "<?php echo $row['genero']; ?>"></td>
            <td>
            <select  name="carrera" id="carrera" > 
        <option value="TS en Analista en Sistemas" <?php if($row['carrera'] == 'TS en Analista en Sistemas')echo 'selected == "selected"';?>>TS en Analista en Sistemas</option>
        <option value="TS en Mantenimiento Industrial" <?php if($row['carrera'] == 'TS en Mantenimiento Industrial')echo 'selected == "selected"';?>> TS en Mantenimiento Industrial</option>
        <option value="TS en Logística"<?php if($row['carrera'] == 'TS en Logística')echo 'selected == "selected"';?>>TS en Logística</option>
    
    </select>
            </td>
            <td> <input type= "submit" class = "btn btn-success" style= "font-family:'Raleway','sans-serif';" value = "Actualizar"> </td>
    <tr>
        
    <?php } ?>
    </table>

</form>

</div>

</body>
</html>
