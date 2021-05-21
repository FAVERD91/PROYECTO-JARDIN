<?php

require_once 'conexion.php';

if($mysqli ->connect_errno)
{
    die("Fallo la conexion hacia la Base de Datos MySQL:
    (".$mysqli->mysqli_connect_errno().")".$mysqli->mysqli_connect_error());   
}
else
{
    echo"Conexion Hacia LA BD fue Exitosa...!";
}

if(isset($_POST['enviar_datos']))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $insertDatos = "INSERT INTO contactenos VALUES ('$name','$email','$message')";

    $ejecutarInsertar = mysqli_query($mysqli,$insertDatos);

    if(!$ejecutarInsertar)
    {
        echo"No Se Pudo Ejecutar Insertar Datos";
        echo"Error: ".$ejecutarInsertar."".mysqli_error($mysqli);
    }
    echo"<br>Los Datos Fueron Ingresados Con Exito";
}
$mysqli->close();
?>