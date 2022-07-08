<?php include '../index.php' ?>

<div class="container-fluid bg-info">
    <div class="row">
        <div class="col-md">
            <header class="py-2">
                <h2 class="text-center">REGISTRAR USUARIO</h2>
            </header>
        </div>
    </div>
</div>
<div class="container mt-5">
    <?php
        if(isset($_GET['mensaje'])and $_GET['mensaje']=='incompleto'){
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Datos incompletos</strong>
    </div>
    <?php
        }
    ?>
    <div class="row justify-content-center" >
        <div class="col-md">
            <div class="card">
                <div class="p-5">
                    <form class="p-4" method="POST" action="../registerUser.php">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Puesto</label>
                            <input type="text" class="form-control" id="place" name="place" autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="user" name="user" autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="text" class="form-control" id="password" name="password" autofocus>
                        </div>
                        <div class="d-grid">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
