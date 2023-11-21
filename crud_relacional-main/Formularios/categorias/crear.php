<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR SUCURSAL</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                        <div class="mb-3">
                                <label for="nombreC" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="Nom_Sucursal" name="Nom_Sucursal" placeholder="Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="estadoC" class="form-label">Horario</label>
                                <input type="text" class="form-control" id="Horario" name="Horario" placeholder="Horario">
                            </div>
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Contacto</label>
                                <input type="text" class="form-control" id="Contacto" name="Contacto" placeholder="Contacto" >
                            </div>
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="nombreC" name="Municipio" placeholder="Municipio" >
                            </div>
                            <div class="mb-3">
                                <label for="estadoC" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="Colonia" >
                            </div>
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Avenida</label>
                                <input type="text" class="form-control" id="Avenida" name="Avenida" placeholder="Avenida">
                            </div>
                            <div class="mb-3">
                                <label for="estadoC" class="form-label">Numero</label>
                                <input type="text" class="form-control" id="Numero" name="Numero" placeholder="Numero">
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/categorias/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
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