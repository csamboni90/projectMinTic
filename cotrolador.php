<?php
    if (!empty($_POST["btningresar"])){
        if (empty($_POST["user"]) and empty($_POST["password"])){
            echo "los Campos estan vacios";
        }else{
            $user = $_POST["user"];
            $password = $_POST["password"];
            

        }
    }

?>