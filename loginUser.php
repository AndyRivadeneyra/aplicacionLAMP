<?php include ('../index.php') ?>
<?php
require("model/conexion.php");

$conn=conect();
$name=$conn->real_escape_string($_POST['user']);
$password=$conn->real_escape_string($_POST['password']);
$sql = "SELECT * FROM people WHERE user='$name' AND password='$password'";
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);


try {
    if($row==1){
        Header("Location: template/list.php");
    }else{
        Header("Location: template/login.php?mensaje=incorrecto");
    }
} catch (Exception $e) {
    echo($e);
}
?>