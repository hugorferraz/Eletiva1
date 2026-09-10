<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 12 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 12 - Função rand()</h1>
            <form method="post" action="exerc12.php">
                <button type="submit" class="btn btn-primary">Gerar Senha</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                // Conjunto de caracteres permitidos
                $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                $tamanho = 8;
                $senha = '';
                
                //Posição máxima da string de caracteres (0 até 61)
                $limite = strlen($caracteres) - 1;

                //Sorteia 8 caracteres
                for ($i = 0; $i < $tamanho; $i++){
                    $indiceSorteado = rand(0, $limite);
                    $senha .= $caracteres[$indiceSorteado];
                }

                echo "<p>Senha gerada: $senha </p>";
            }
        ?>
    </div>
</body>
</html>   
