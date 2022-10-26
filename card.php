
<link rel="stylesheet" href="./css/card.css">

<form name="formulario">
<img src="imagen/alumna.png"/>
<h2> ALUMNO</h2>

<?php

 // recupera los datos del envío POST

 $nombre = $_POST['nombre'];
 echo " <p/>  &nbsp; Nombre:". $nombre;

 $apellidos = $_POST['apellidos'];
 echo "<br/> &nbsp; Apellido: ". $apellidos;

 $edad = $_POST['edad'];
 echo "<br/> &nbsp; Edad: ". $edad;

 $correo = $_POST['correo'];
 echo "<br/> &nbsp; Correo: ". $correo;

 $contraseña = $_POST['contraseña'];
 echo "<br/> &nbsp; Contraseña: ". $contraseña;

?>
</form>