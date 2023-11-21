<?php

include "../config/conexion.php";

$Nom_Sucursal = $_POST['Nom_Sucursal'];
$Contacto = $_POST['Contacto'];
$Horario = $_POST['Horario'];
$Municipio = $_POST['Municipio'];
$Colonia = $_POST['Colonia'];
$Avenida = $_POST['Avenida'];
$Numero = $_POST['Numero'];

$sql = "INSERT INTO categorias(Nom_Sucursal,Contacto,Horario,Municipio,Colonia,Avenida,Numero) 
    VALUES ('$Nom_Sucursal','$Contacto','$Horario','$Municipio','$Colonia','$Avenida','$Numero')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
