<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 11 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 11 - Função number_format()</h1>
            <form method="post" action="exerc11.php">
            <div class="mb-3">
                <label for="valor" class="form-label">Digite um valor: </label>
                <input type="number" step="any" id="valor" name="valor" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_POST){
                $valor = $_POST['valor'] ?? 0.00;
                
                if ($valor != 0.00){
                    $valorDec = "R$ " . number_format($valor, 2, ",", ".");

                    echo "<p>Entrada -> $valor</p>";
                    echo "<p> Saída -> $valorDec</p>";
                }
            }   
        ?>
    </div>
</body>
</html>   