<?php include ('../index.php') ?>

<?php
require("../model/conexion.php");

$conn=conect();
$sql="SELECT *  FROM people";
$query=mysqli_query($conn,$sql);

?>


</html>
    <div class="container-fluid bg-info">
        <div class="row">
            <div class="col-md">
                <header class="py-2">
                    <h2 class="text-center">LISTA DE USUARIOS</h2>
                </header>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <?php
            if(isset($_GET['mensaje'])and $_GET['mensaje']=='registrado'){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Usuario registrado</strong>
        </div>
        <?php
            }
        ?>
        <?php
            if(isset($_GET['mensaje'])and $_GET['mensaje']=='editado'){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Usuario editado</strong>
        </div>
        <?php
            }
        ?>
        <?php
            if(isset($_GET['mensaje'])and $_GET['mensaje']=='eliminado'){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Usuario eliminado</strong>
        </div>
        <?php
            }
        ?>
        <div class="py-2">
            <a href="../template/register.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-info">CREAR USUARIO</a>
            <a href="login.php" class="btn btn-outline-warning">CERRAR SESIÒN</a>
        </div>
        <div class="row justify-content-center" >
            <div class="col-md">
                <div class="card">
                    <div class="p-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Puesto</th>
                                    <th>Usuario</th>
                                    <th colspan="2">OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['name']?></th>
                                    <th><?php echo $row['place']?></th>
                                    <th><?php echo $row['user']?></th>   
                                    <th><a href="../template/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-warning">EDITAR</a></th>
                                    <th><a href="../deleteUser.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-danger">ELIMINAR</a></th>                                        
                                </tr>
                            <?php 
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>