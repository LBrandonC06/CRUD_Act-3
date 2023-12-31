<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">CATEGORIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">MARCAS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR SERVICIO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM productos WHERE idProducto =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idProducto'] ?>">

                            <!-- TRAER DATOS CATEGORIAS -->
                            <div class="mb-3">
                                <label for="categoriasU" class="form-label">Categorias</label>
                                <select class="form-select form-select-lg" name="categoriasU" id="categoriasU">
                                    <option selected disabled>Seleccione una categoria</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql1 = "SELECT * FROM categorias WHERE idSucursales=" . $row['categoriaId'];
                                    $resultado1 = $conexion->query($sql1);
                                    $row1 = $resultado1->fetch_assoc();

                                    echo "<option selected value='" . $row1['idSucursales'] . "'>" . $row1['Nom_Sucursal'] . "</option>";

                                    $sql2 = "SELECT * FROM categorias";
                                    $resultado2 = $conexion->query($sql2);

                                    while ($fila = $resultado2->fetch_array()) {
                                        if ($fila['idSucursales'] !== $row1['idSucursales']) {
                                            echo "<option value='" . $fila['idSucursales'] . "'>" . $fila['Nom_Sucursal'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marcasU" class="form-label">Nombre Dueno</label>
                                <select class="form-select form-select-lg" name="marcasU" id="marcasU">
                                    <option selected disabled>Seleccione el Nombre  del Dueno</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM marcas WHERE idUsuario=" . $row['marcaId'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row3['idUsuario'] . "'>" . $row3['Nombre_D'] . "</option>";

                                    $sql4 = "SELECT * FROM marcas";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['idUsuario'] !== $row3['idUsuario']) {
                                            echo "<option value='" . $fila['idUsuario'] . "'>" . $fila['Nombre_D'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombreU" class="form-label">Nombre Servicio</label>
                                <input type="text" class="form-control" id="nombreServisio" name="nombreServisio" placeholder="Nombre del producto" value="<?php echo $row['nombreServisio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Telefonos" class="form-label">Telefonos</label>
                                <input type="text" class="form-control" id="Telefonos" name="Telefonos" placeholder="Telefonos"><?php echo $row['Telefonos'] ?></input>
                            </div>
                            <div class="mb-3">
                                <label for="precioU" class="form-label">Municipio</label>
                                <input type="text" class="form-control" name="Municipio" id="Municipio" placeholder="Municipio" value="<?php echo $row['municipio'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>