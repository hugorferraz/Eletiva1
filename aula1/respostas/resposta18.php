<?php
    $dias = $_POST["dias"];

    $horas = $dias * 24;
    $minutos = $dias * 1440;
    $segundos = $dias * 86400;

    echo ("$horas horas");
    echo ("<br>");
    echo ("$minutos minutos");
    echo ("<br>");
    echo ("$segundos segundos");