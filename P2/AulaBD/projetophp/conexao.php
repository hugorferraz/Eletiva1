<?php

    $str = "mysql:host=localhost;dbname=projetophp";
    $user = "root";
    $pwd = "";

    try {
        $con = new PDO($str, $user, $pwd);

    } catch(PDOEException $e){
        die("Não foi possível conectar ao banco!");
    }