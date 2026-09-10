<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 13 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 13 - Função str_word_count()</h1>
            <form method="post" action="exerc13.php">
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
                    //Contar palavras
                    $totalPalavras = str_word_count($frase);

                    //Encontrando a maior palavra
                    $maiorPalavra = "";
                    $tamanhoMaior = 0;
                    //Adicionando um espaço no final para processar a última palavra
                    $texto = $frase . " ";
                    $posicaoEspaco = strpos($texto, ' ');

                    while ($posicaoEspaco != false){
                        $palavra = mb_substr($texto, 0, $posicaoEspaco);
                        if ($palavra != ""){
                            if (mb_strlen($palavra) > $tamanhoMaior){
                                $maiorPalavra = $palavra;
                                $tamanhoMaior = mb_strlen($palavra);
                            }
                        }

                        $texto = mb_substr($texto, $posicaoEspaco + 1);

                        $posicaoEspaco = strpos($texto, ' ');
                    }

                    echo "<p> Frase: $frase </p>";
                    echo "<p> Total de Palavras: $totalPalavras </p>";
                    echo "<p> Maior Palavra: $maiorPalavra </p>";
                }
            }
        ?>
    </div>
</body>
</html>   