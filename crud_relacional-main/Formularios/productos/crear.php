<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">SERVICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">SUCURSAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">DUENO</a>
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
                        <h5 class="card-title text-center">REGISTRAR SERVICIO</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="categoriasP" class="form-label">Categorias</label>
                                <select class="form-select form-select-lg" name="categoriasP" id="categoriasP" required>
                                    <option selected disabled>Seleccione una categoria</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM categorias");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['idSucursales'] . "'>" . $resultado['Nom_Sucursal'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marcasP" class="form-label">Nombre Dueno</label>
                                <select class="form-select form-select-lg" name="marcasP" id="marcasP" required>
                                    <option selected disabled>Seleccione el Nombre  del Dueno</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM marcas");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['idUsuario'] . "'>" . $resultado['Nombre_D'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Telefonos" class="form-label">Problema</label>
                                <input class="form-control" type="text" id="Telefonos" name="Problema" rows="2" placeholder="Problema" required></input>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombreP" name="nombreP" placeholder="Nombre del producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="Telefonos" class="form-label">Telefonos</label>
                                <input class="form-control" type="text" id="Telefonos" name="Telefonos" rows="2" placeholder="Telefonos" required></input>
                            </div>
                            <div class="mb-3">
                                <label for="precioP" class="form-label">Municipio</label>
                                <input type="text" class="form-control" name="Municipio" id="precioP" placeholder="Municipio" required>
                            </div>
                            <div class="mb-3">
                                <label for="precioP" class="form-label">F_Solicitud</label>
                                <input type="text" class="form-control" name="F_Solicitud" id="precioP" placeholder="F_Solicitud" required>
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>