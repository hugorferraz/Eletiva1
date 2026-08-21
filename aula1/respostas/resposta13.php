<?php
    $quilometros = $_POST["kms"];

    $milhas = $quilometros * 0.621371;

    echo "$quilometros quilômetros equilave a $milhas milhas";