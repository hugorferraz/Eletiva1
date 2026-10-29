<?php
    require_once("conexao.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM alunos WHERE id = :id";
    $resultado = $con->prepare($sql);
    $resultado->bindParam(":id", $id);
    $resultado->execute();
    header("Location: index.php");
