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
                        <h5 class="card-title text-center">REGISTRAR DUENO</h5>
                        <form action="<?php echo base_url; ?>CRUDM/insertarDatos.php" method="POST">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idUsuario'] ?>">
                            <div class="mb-3">
                                <label for="nombreM" class="form-label">Nombre_D</label>
                                <input type="text" class="form-control" id="nombreM" name="Nombre_D" placeholder="Nombre_Dueno" >
                            </div>
                            <div class="mb-3">
                                <label for="estadoM" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="estadoM" name="Calle" placeholder="Calle" >
                            </div>                            
                            <div class="mb-3">
                                <label for="nombreM" class="form-label">C_Postal</label>
                                <input type="text" class="form-control" id="nombreM" name="C_Postal" placeholder="C_Postal" >
                            </div>
                            <div class="mb-3">
                                <label for="estadoM" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="estadoM" name="Colonia" placeholder="Colonia" >
                            </div>                            
                            <div class="mb-3">
                                <label for="nombreM" class="form-label">N_Ext</label>
                                <input type="text" class="form-control" id="nombreM" name="N_Ext" placeholder="N_Ext" >
                            </div>
                            <div class="mb-3">
                                <label for="estadoM" class="form-label">N_Int</label>
                                <input type="text" class="form-control" id="estadoM" name="N_Int" placeholder="N_Int" >
                            </div> 
                            <div class="mb-3">
                                <label for="estadoM" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="estadoM" name="Telefono" placeholder="Telefono" >
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/marcas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
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