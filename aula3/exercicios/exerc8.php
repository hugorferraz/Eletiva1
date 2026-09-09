<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 8 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 8 - Função preg_match_all()</h1>
            <form method="post" action="exerc8.php">
            <div class="mb-3">
                <label for="frase" class="form-label">Digite uma frase: </label>
                <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_POST){
                $frase = $_POST['frase'] ?? "";
                if ($frase != ""){
                    // u habilita acento e i ignora diferença entre maiúscula e minúscula
                    $totalVogais = preg_match_all('/[aeiouáéíóúâêîôûãõà]/ui', $frase);

                    echo "<p>Frase digitada: $frase </p>";
                    echo "<p> Total de vogais na frase: $totalVogais </p>";
                }
            }

        ?>
    </div>
</body>
</html>   