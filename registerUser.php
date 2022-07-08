<?php
    require("model/conexion.php");

    $conn=conect();
    $name=$_POST['name'];
    $place=$_POST['place'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    
    if(empty($name)||empty($place)||empty($user)||empty($password)){
        Header("Location: template/register.php?mensaje=incompleto");
        exit();
    }else{
        $sql ="INSERT INTO people (name, place, user, password)VALUES('$name','$place','$user','$password')";
        try {
            $query=mysqli_query($conn,$sql);
            Header("Location: template/list.php?mensaje=registrado");
        } catch (Exception $e) {
            echo"<script> alert('Duplicated user');
            window.location=' template/list.php'</script>";
            
        }
    }
?>