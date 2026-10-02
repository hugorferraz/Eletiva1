<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Novo Aluno</h1>
        <form method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Informe o nome: </label>
                <input type="text" id="nome" name="nome" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="ra" class="form-label">Informe o RA: </label>
                <input type="text" id="ra" name="ra" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nome = $_POST['nome'];
                $ra = $_POST['ra'];
                require_once("conexao.php");
                $sql = "INSERT INTO alunos (nome, ra) VALUES (:nome, :ra)";
                $resultado = $con->prepare($sql);
                $resultado->bindParam(":nome", $nome);
                $resultado->bindParam(":ra", $ra);

                if ($resultado->execute())
                    echo("<p>Inserido com sucesso</p>");
                else
                    echo("<p>Erro ao inserir!</p>");
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>