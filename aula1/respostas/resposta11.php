<?php
    $numBase = $_POST["base"];
    $numExpoente = $_POST["expoente"];

    $potencia = $numBase ** $numExpoente;

    echo "O valor dapotência é $potencia";