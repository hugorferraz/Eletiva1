<?php   
    $altRet = $_POST["altura"];
    $largRet = $_POST["largura"];

    $somaAlt = $altRet * 2;
    $somaLarg = $largRet * 2;
    $perimetroRet = $somaAlt + $somaLarg;

    echo "O perímetro do retângulo é $perimetroRet";