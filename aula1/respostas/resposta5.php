<?php
    $tempC = $_POST["tempC"];

    $tempF = ($tempC * 9/5) + 32;

    echo "A temperatura em °F é: $tempF";