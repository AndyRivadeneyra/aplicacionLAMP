<?php
require("model/conexion.php");

$conn=conect();

$id=$_GET['id'];

$sql = "DELETE FROM people WHERE id=$id";

try {
    $query=mysqli_query($conn,$sql);
    Header("Location: template/list.php?mensaje=eliminado");
} catch (Exception $e) {
    echo($e);
}
?>