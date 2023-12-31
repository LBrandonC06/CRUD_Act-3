<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

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
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">USUARIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">SERVICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">SUCURSAL</a>
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
                        <h5 class="card-title text-center">ACTUALIZAR DE SUCURSAL</h5>
                        <form action="<?php echo base_url; ?>CRUDC/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM categorias WHERE idSucursales =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idSucursales'] ?>">
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombreC" name="Nom_Sucursal" placeholder="Nombre del producto" value="<?php echo $row['Nom_Sucursal'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="estadoC" class="form-label">Horario</label>
                                <input type="text" class="form-control" id="estadoC" name="Horario" placeholder="Nombre del producto" value="<?php echo $row['Horario'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Contacto</label>
                                <input type="text" class="form-control" id="nombreC" name="Contacto" placeholder="Nombre del producto" value="<?php echo $row['Contacto'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="nombreC" name="Municipio" placeholder="Nombre del producto" value="<?php echo $row['Municipio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="estadoC" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="estadoC" name="Colonia" placeholder="Nombre del producto" value="<?php echo $row['Colonia'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Avenida</label>
                                <input type="text" class="form-control" id="nombreC" name="Avenida" placeholder="Nombre del producto" value="<?php echo $row['Avenida'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="estadoC" class="form-label">Numero</label>
                                <input type="text" class="form-control" id="estadoC" name="Numero" placeholder="Nombre del producto" value="<?php echo $row['Numero'] ?>">
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

</body>

</html>