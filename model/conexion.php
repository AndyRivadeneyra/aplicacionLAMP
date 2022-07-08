<?php
    function conect(){
        $user="root";
        $password="root";
        $server="localhost";
        $database_name="appLAMP";
        try {
            $conn = mysqli_connect($server,$user,$password);
            mysqli_select_db($conn,$database_name);
        } catch (Exception $e) {
            echo($e);
        }
        
        return $conn;

    }

?>