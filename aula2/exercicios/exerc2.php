<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTA 2 - Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 2</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="numA" class="form-label">Informe o primeiro número: </label>
                    <input type="number" id="numA" name="numA" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="numB" class="form-label">Informe o segundo número: </label>
                    <input type="number" id="numB" name="numB" class="form-control" required="">
                            
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <?php
            if ($_POST){
                $numA = $_POST['numA'];
                $numB = $_POST['numB'];

                if ($numA > $numB)
                    echo "$numA     $numB";

                elseif ($numB > $numA)
                    echo "$numB     $numA";

                else
                    echo "Números iguais: $numA";
            }
        ?>
    </div>
</body>
</html>