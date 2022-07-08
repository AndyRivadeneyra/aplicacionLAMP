<?php include ('../index.php') ?>
<?php
require("../model/conexion.php");

$conn=conect();

$id=$_GET['id'];

$sql="SELECT *  FROM people WHERE id=$id";

try {
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
} catch (Exception $e) {
    echo $e;
}



?>

<div class="container-fluid bg-info">
    <div class="row">
        <div class="col-md">
            <header class="py-2">
                <h2 class="text-center">EDITAR USUARIO</h2>
            </header>
        </div>
    </div>
</div>
<body>
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
                        <form class="p-4" method="POST" action="../editUser.php">
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control mb-3" name="name" value="<?php echo $row['name']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Puesto</label>
                                <input type="text" class="form-control mb-3" name="place" value="<?php echo $row['place']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Usuario</label>
                                <input type="text" class="form-control mb-3" name="user" value="<?php echo $row['user']?>" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="text" class="form-control mb-3" name="password" value="<?php echo $row['password']?>">
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Editar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>