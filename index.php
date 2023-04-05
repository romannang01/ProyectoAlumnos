
<?php

$conn = mysqli_connect("localhost","root","","alumnos");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="registrar.css" rel="stylesheet">
    <title>Registrar</title>
</head>
<body>
    
<div align="center">
    
    
    
    <form  action= "registro.php" method = "POST" name = "formu" onsubmit = "return validar(this);">
        <div>
        <h1>REGISTRAR</h1>
    </div>
    <br>
    
      <div class= "d-flex">
        <input type= "text" name="nombre" id="nombre" placeholder="Nombre">
        &nbsp;  &nbsp;

        <input type="text" name="direccion" id="direccion" placeholder= "Dirección">
      </div>
    <div class="d-flex">
        <input type= "tel" name= "telefono" id= "telefono" placeholder = "Teléfono">
        &nbsp;  &nbsp;
        <input type= "email" name= "correo" id= "correo" placeholder = "Correo electrónico">
    </div>
    
    <div class= "d-flex">
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
        &nbsp;  &nbsp;
        <select name="genero" id="genero">
            <option value="Género">Género</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        
        </select>
  </div>

  <div class="d-flex">
    <select  style="width:100%" name="carrera" id="carrera">
    <option>Carrera</option>
        <option value="TS en Analista en Sistemas">TS en Analista en Sistemas</option>
        <option value="TS en Mantenimiento Industrial">TS en Mantenimiento Industrial</option>
        <option value="TS en Logística">TS en Logística</option>
    
    </select>
 </div>
  <button type="submit" class="btn btn-success" name="boton" id="boton"><a>Registrar</a></button>
  <br>
 <br>
  </form>
</div>

</body>
</html>

<script type="text/javascript">
function validar(campo)
{
   
        if(campo.nombre.value.length == 0)
        {
                campo.nombre.focus();   
                alert("El formulario está vacío. Por favor completar los campos restantes");
                return false;
        }
 if(campo.direccion.value.length == 0)
        {
                campo.direccion.focus();   
                alert("El formulario está vacío. Por favor completar los campos restantes");
                return false;
        }
        
 if(campo.telefono.value.length == 0)
        {
                campo.telefono.focus();   
                alert("El formulario está vacío. Por favor completar los campos restantes");
                return false;
        }        
        
        if(campo.correo.value.length == 0)
        {
                campo.correo.focus();   
                alert("El formulario está vacío. Por favor completar los campos restantes");
                return false;
        }
 if(campo.fecha_nacimiento.value.length == 0)
        {
                campo.fecha_nacimiento.focus();   
                alert("El formulario está vacío. Por favor completar los campos restantes");
                return false;
        }
        
 if(campo.genero.value.length == "")
        {
                campo.genero.focus();   
                alert("El formulario está vacío. Por favor completar los campos restantes");
                return false;
        }  
        if(campo.carrera.value.length == "")
        {
                campo.carrera.focus();   
                alert("El formulario está vacío. Por favor completar los campos restantes");
                return false;
        }  
        return true;
    
}
 
 
</script>


    