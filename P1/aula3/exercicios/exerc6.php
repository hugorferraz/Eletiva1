<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 6 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 6 - Função ceil(), floor() e round()</h1>
            <form method="post" action="exerc6.php">
            <div class="mb-3">
                <label for="numero" class="form-label">Digite o número: </label>
                <input type="number" step ="any" id="numero" name="numero" class="form-control" required=""> <!-- step="any" permite digitar números decimais com vírgula ou ponto -->
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_POST){
                $numero = $_POST['numero'] ?? 0.00;
                if ($numero != 0.00){
                    $nFormatCima = ceil($numero);
                    $nFormatBaixo = floor($numero);
                    $nFormatAuto = round($numero);

                    echo "<p> Número original: $numero </p>";
                    echo "<p> Número arredondado para cima: $nFormatCima </p>";
                    echo "<p> Número arredondado para baixo: $nFormatBaixo </p>";
                    echo "<p> Número arredondado normalmente: $nFormatAuto </p>";
                }
            }
        ?>
    </div>
</body>
</html>   