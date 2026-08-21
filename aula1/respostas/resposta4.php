<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];

    $soma = $valor1 + $valor2 + $valor3;
    $media = $soma / 3;
    
    echo "O valor da média é: $media";
