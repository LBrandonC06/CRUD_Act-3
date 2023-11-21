<?php

include "../config/conexion.php";

$Nombre_D = $_POST['Nombre_D'];
$Calle = $_POST['Calle'];
$C_Postal = $_POST['C_Postal'];
$Colonia = $_POST['Colonia'];
$N_Ext = $_POST['N_Ext'];
$N_Int = $_POST['N_Int'];
$Telefono = $_POST['Telefono'];

$sql = "INSERT INTO marcas(Nombre_D,Calle,C_Postal,Colonia,N_Ext,N_Int,Telefono)
    VALUES ('$Nombre_D','$Calle','$C_Postal','$Colonia','$N_Ext','$N_Int','$Telefono')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
