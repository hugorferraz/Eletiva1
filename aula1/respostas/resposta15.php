<?php
    $preco = $_POST["preco"];
    $desconto = $_POST["desconto"];

    $valor = $preco - ($preco * ($desconto / 100));

    echo ("O valor com desconto é $valor");