<?php
    $capital = $_POST["capital"];
    $txJuros = $_POST["txJuros"];
    $periodo = $_POST["periodo"];

    $jurosSimples = $capital * ($txJuros / 100) * $periodo;
    $totalValor = $jurosSimples + $capital;

    echo ("O valor do juros é $jurosSimples");
    echo ("<br>");
    echo ("O total do valor com juros é $totalValor");