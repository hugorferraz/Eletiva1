<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 9 - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 9 - Função trim() e str_replace()</h1>
            <form method="post" action="exerc9.php">
            <div class="mb-3">
                <label for="frase" class="form-label">Digite uma frase: </label>
                <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
        <?php
            if ($_POST){
                $fraseOriginal = $_POST ['frase'] ?? "";

                if ($frase != ""){
                    $fraseSemEspacosIniFin = trim($fraseOriginal);
                    $fraseSemNenhumEspaco = str_replace(' ', '', $fraseSemNenhumEspaco);

                    echo "<p> Frase original: $fraseOriginal </p>";
                    echo "<p> Frase sem espaços iniciais e finais $fraseSemEspacosIniFin </p>";
                    echo "<p> Frase sem nenhum espaço $fraseSemNenhumEspaco </p>";
                }
            }
        ?>
    </div>
</body>
</html>   