<?php 
include 'head2.html';

//Recibiendo datos desde el Index.php usando el metodo POST
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//Mostrando los datos recibidos  (echo es para imprimir en php)
echo "<p>Mi nombre es: $nombre</p>";
echo "<p>Mi edad es: $edad</p>";
echo "<p>Mi correo es: $correo</p>";
echo "<p>Mi contraseña es: $contraseña</p>";
echo "<a href='Index.php'> Back </a>"; //Boton para regresar




?>