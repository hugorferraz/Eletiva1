<?php
    $capital = $_POST["capital"];
    $txJuros = $_POST["txJuros"];
    $periodo = $_POST["periodo"];

    $jurosComposto = $capital * ((1 + $txJuros / 100) ** $periodo);
    $totalValor = $jurosComposto + $capital;

    echo ("O valor do juros é $jurosComposto");
    echo ("<br>");
    echo ("O total do valor com juros é $totalValor");