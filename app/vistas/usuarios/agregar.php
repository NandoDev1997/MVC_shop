<?php include RUTA_APP . '/vistas/inc/header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Agregar usuario</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo RUTA_URL ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo RUTA_URL ?>/usuarios">Usuarios</a></li>
                        <li class="breadcrumb-item active">Agregar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="container">
            <div class="row d-flex justify-content">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="..." class="rounded float-left" alt="...">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Este formulario te permite crear un nuevo usuario dentro del sistema y asignar sus datos</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card">
                        <div class="card-header">
                            <h3 class="card-title">Formulario agregar usuario</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo RUTA_URL; ?>/usuarios/agregar" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="imagen">Carga la imagen del usuario</label>
                                    <input type="file" name="img" class="form-control-file" id="img" required>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="nombre" name="nombre" class="form-control" id="nombre" placeholder="Ingresa el nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="apellidos" name="apellidos" class="form-control" id="apellidos" placeholder="Ingresa los apellidos" required>
                                </div>
                                <div class="form-group">
                                    <label for="puesto">Puesto</label>
                                    <input type="puesto" name="puesto" class="form-control" id="puesto" placeholder="Ingresa el puesto" required>
                                </div>
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="usuario" name="usuario" class="form-control" id="usuario" placeholder="Ingresa el usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Ingresa el email" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="telefono" name="telefono" class="form-control" id="telefono" placeholder="Ingresa el teléfono" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include RUTA_APP . '/vistas/inc/footer.php'; ?>