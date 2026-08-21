<?php

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura ** 2);

    echo "O valor do IMC é de $imc";