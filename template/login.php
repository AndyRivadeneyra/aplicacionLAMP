<?php include '../index.php' ?>

<div class="container-fluid bg-info">
    <div class="row">
        <div class="col-md">
            <header class="py-2">
                <h2 class="text-center">INICIAR SESIÒN</h2>
            </header>
        </div>
    </div>
</div>
<body>
    <div class="container mt-5">
        <?php
            if(isset($_GET['mensaje'])and $_GET['mensaje']=='incorrecto'){
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Usuario o contraseña incorrecta</strong>
        </div>
        <?php
            }
        ?>
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <form action="../loginUser.php" method="POST">
                        <div class="p-5">
                            <div class="mb-3">
                                <label class="form-label">Usuario</label>
                                <input type="text" name="user" class="form-control" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-info" value="Iniciar sesiòn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>