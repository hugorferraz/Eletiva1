<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplos de Funções em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exemplos de Funções em PHP</h1>
            <form method="post" action="exemplo.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Digite o seu nome: </label>
                <input type="text" id="nome" name="nome" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Digite a sua idade: </label>
                <input type="number" id="idade" name="idade" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nome = $_POST['nome'] ?? "";
                $idade = $_POST['idade'] ?? 0;

                if ($nome != "" && $idade > 0){
                    $qtd = strlen($nome);
                    echo "<p>Qtd de caracteres do Nome: $qtd</p>";
                    echo "<p>Maiscúlo: " . strtoupper($nome) . "</p>";
                    $s = str_replace("a", "4", $nome);
                    echo "<p>Substituição do a: $s </p>";
                    $dia = date("d");
                    echo "<p>Dia: $dia </p>";
                    $mes = date("m");
                    echo "<p>Mês: $mes </p>";
                    $tempo = date("d/m/Y H:i:s");
                    echo "<p>Data e Hora: $tempo </p>";
                }
            }
        ?>
        

    </div>
</body>
</html>