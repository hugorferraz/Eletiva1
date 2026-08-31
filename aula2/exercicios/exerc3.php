<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTA 2 - Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 3</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="valorProduto" class="form-label">Informe o valor do Produto: </label>
                    <input type="number" id="valorProduto" name="valorProduto" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <?php
            if ($_POST){
                $valorProduto = $_POST['valorProduto'];

                if ($valorProduto > 100){
                    $desc15 = $valorProduto - ($valorProduto * (15 / 100));
                    echo "O Produto com desconto custa: $desc15";
                }

                else
                    echo "Não houve desconto! ";
            }
        ?>
    </div>
</body>
</html>