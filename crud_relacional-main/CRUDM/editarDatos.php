<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $Nombre_D = $_POST['Nombre_D'];
    $Calle = $_POST['Calle'];
    $C_Postal = $_POST['C_Postal'];
    $Colonia = $_POST['Colonia'];
    $N_Ext = $_POST['N_Ext'];
    $N_Int = $_POST['N_Int'];
    $Telefono = $_POST['Telefono'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE marcas SET  Nombre_D = '$Nombre_D',Calle = '$Calle',C_Postal = '$C_Postal',Colonia = '$Colonia',N_Ext = '$N_Ext',N_Int = '$N_Int',Telefono = '$Telefono' WHERE idUsuario = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
