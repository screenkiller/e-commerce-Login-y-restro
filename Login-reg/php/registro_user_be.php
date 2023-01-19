<?php
   include 'conexion__be.php';
     
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $password = md5($password

    $query = "INSERT INTO  data2(nombre,email,usuario,contrasena) 
    VALUES ('$nombre','$correo','$usuario','$contrasena')";

    $resultado = mysqli_query($conexion,$query);
?>