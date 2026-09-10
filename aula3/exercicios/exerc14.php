<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 14 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 14 - Função mb_strrev()</h1>
            <form method="post" action="exerc14.php">
            <div class="mb-3">
                <label for="palavra" class="form-label">Digite uma palavra: </label>
                <input type="text" id="palavra" name="palavra" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_POST){
                $palavraOriginal = trim($_POST['palavra']) ?? "";

                if ($palavraOriginal != ""){
                    $textoTratado = mb_strtolower(str_replace(' ', '', $palavraOriginal));

                    $textoInvertido = "";
                    $tamanho = mb_strlen($textoTratado);

                    for ($i = $tamanho - 1; $i >= 0; $i--){
                        $textoInvertido .= mb_substr($textoTratado, $i, 1);
                    }

                    if ($textoTratado == $textoInvertido){
                        echo "<p> $palavraOriginal " . "-> é palíndromo </p> ";
                    }
                    else{
                        echo "<p> $palavraOriginal " . " -> não é palíndromo </p>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>