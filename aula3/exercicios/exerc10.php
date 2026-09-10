<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 10 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 10 - Função strpos() | mb_strtoupper() e mb_substr</h1>
            <form method="post" action="exerc10.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Digite o nome completo: </label>
                <input type="text" id="nome" name="nome" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_POST){
                $nomeCompleto = $_POST['nome'] ?? "";
                if ($nomeCompleto != ""){
                    //Primeira letra do nome
                    $iniciais = mb_strtoupper(mb_substr($nomeCompleto, 0, 1)) . ".";

                    //posição do primeiro espaço
                    $posicaoEspaco = strpos($nomeCompleto, ' ');

                    //Repetição enquanto encontra espaço no nome
                    while ($posicaoEspaco != false){
                        //pega o caractere após o espaço
                        $letra = mb_substr($nomeCompleto, $posicaoEspaco + 1, 1 );

                        //Garante que não seja espaço duplo
                        if ($letra != ' ' && $letra != ''){
                            $iniciais .= mb_strtoupper($letra) . ".";
                        }

                        //Procura o próximo espaço a partir da posição
                        $posicaoEspaco = strpos($nomeCompleto, ' ', $posicaoEspaco + 1);
                    }

                    $iniciais = rtrim($iniciais, '.');        //Remove o último caractere da string "."
                    echo "<p> Entrada -> $nomeCompleto</p>";
                    echo "<p> Saída -> $iniciais </p>";
                }
            }   
        ?>
    </div>
</body>
</html>   