<?php
require("model/conexion.php");

$conn=conect();

$id=$_POST['id'];
$name=$_POST['name'];
$place=$_POST['place'];
$user=$_POST['user'];
$password=$_POST['password'];

$sql = "UPDATE people SET name='$name', place='$place', user='$user' ,password='$password' WHERE id=$id";
echo "";
if(empty($name)||empty($place)||empty($password)||empty($user)){
    Header("Location: template/edit.php?mensaje=incompleto");
    exit();
}else{
    try {
        $query=mysqli_query($conn,$sql);
        Header("Location: template/list.php?mensaje=editado");
    } catch (Exception $e) {
        echo($e);
    }
    
}
?>