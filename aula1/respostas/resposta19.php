<?php
    $distancia = $_POST["distancia"];
    $tempo = $_POST["tempo"];

    $velocidadeMedia = $distancia / $tempo;

    echo "A velocidade média é de $velocidadeMedia";    