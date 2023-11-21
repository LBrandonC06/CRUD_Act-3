<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $Nom_Sucursal = $_POST['Nom_Sucursal'];
    $Horario = $_POST['Horario'];
    $Contacto = $_POST['Contacto'];
    $Municipio = $_POST['Municipio'];
    $Colonia = $_POST['Colonia'];
    $Avenida = $_POST['Avenida'];
    $Numero = $_POST['Numero'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE categorias SET Nom_Sucursal = '$Nom_Sucursal',Horario = '$Horario',Contacto = '$Contacto',Municipio = '$Municipio',Colonia = '$Colonia',Avenida = '$Avenida',Numero = '$Numero' WHERE idSucursales = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
