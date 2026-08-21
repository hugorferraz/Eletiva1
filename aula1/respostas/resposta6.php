<?php
    $tempF = $_POST["tempF"];

    $tempC = ($tempF - 32) * (5/9);

    echo "A temperatura em °C é $tempC";