<?php

include "../config/conexion.php";

$categoria = $_POST['categoriasP'];
$marca = $_POST['marcasP'];
$nombre = $_POST['nombreP'];
$Problema = $_POST['Problema'];
$Telefonos = $_POST['Telefonos'];
$Municipio = $_POST['Municipio'];
$F_Solicitud = $_POST['F_Solicitud'];

$sql = "INSERT INTO productos(categoriaId,marcaId,nombreServisio,problema,Telefonos,municipio,F_Solicitud)
    VALUES ('$categoria','$marca','$nombre','$Problema','$Telefonos','$Municipio','$F_Solicitud')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
