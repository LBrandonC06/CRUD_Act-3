<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $categoria = $_POST['categoriasU'];
    $marca = $_POST['marcasU'];
    $nombreServisio = $_POST['nombreServisio'];
    $Telefonos = $_POST['Telefonos'];
    $Municipio = $_POST['Municipio'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE productos SET categoriaId = '$categoria',marcaId = '$marca',nombreServisio = '$nombreServisio',Telefonos = '$Telefonos', municipio = '$Municipio' WHERE idProducto = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
