<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 4 - Função checkdate() e sprintf()</h1>
            <form method="post" action="exerc4.php">
            <div class="mb-3">
                <label for="dia" class="form-label">Digite o dia: </label>
                <input type="number" id="dia" name="dia" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="mes" class="form-label">Digite o mês: </label>
                <input type="number" id="mes" name="mes" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Digite o ano: </label>
                <input type="number" id="ano" name="ano" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_POST){
                $dia = $_POST['dia'] ?? 0;
                $mes = $_POST['mes'] ?? 0;
                $ano = $_POST['ano'] ?? 0;

                if ($dia != 0 && $mes != 0 && $ano != 0){
                    if (checkdate($mes, $dia, $ano)){
                    // %02d garante 2 dígitos para dia e mês.
                        $dataFormatada = sprintf('%02d/%02d/%04d', $dia, $mes, $ano);
                        echo "<p> Data válida: $dataFormatada </p>";
                    }

                    else 
                        echo "<p>A data informada $dia/$mes/$ano é inválida! </p>";
                }
            }
        ?>
    </div>
</body>
</html>        