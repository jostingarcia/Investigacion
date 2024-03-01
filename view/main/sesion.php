<?php

    session_start();

    if(!isset($_SESSION["nombre"])) {

        header("location: ../../index.php");

    }

    $user_nom = $_SESSION["nombre"];
  
?>