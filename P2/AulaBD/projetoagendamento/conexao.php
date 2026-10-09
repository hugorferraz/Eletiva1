<?php

    $str = "mysql:host=localhost;dbname=agendamentos";
    $user = "root";
    $pwd = "";

    try {
        $con = new PDO($str, $user, $pwd);
        
    } catch(PDOEException $e){
        die("Não foi possível fazer a conexão!");
    }