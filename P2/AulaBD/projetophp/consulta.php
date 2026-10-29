<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("conexao.php");
        $sql = "SELECT * FROM alunos WHERE id = :id";
        $resultado = $con->prepare($sql);
        $resultado->bindParam(':id', $id);
        $resultado->execute();
        $dados = $resultado->fetch();
        if (!$dados)
            die("Registro não encontrado!");
        echo "Valor de dados: ";
        var_dump($dados);
    } 
    else
        die("Não é possível abrir o arquivo!");
?>

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
        <h1>Dados do Aluno</h1>
        <form method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Informe o nome: </label>
                <input value="<?= $dados['nome']?>" type="text" id="nome" name="nome" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="ra" class="form-label">Informe o RA: </label>
                <input value="<?= $dados['ra']?>" type="text" id="ra" name="ra" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
            <a href="excluir.php?id=<?= $dados['id'] ?>">Excluir</a>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nome = $_POST['nome'];
                $ra = $_POST['ra'];
                $id = $_GET['id'];
                require_once("conexao.php");
                $sql = "UPDATE alunos SET nome = :nome, ra = :ra WHERE id = :id";
                $resultado = $con->prepare($sql);
                $resultado->bindParam(":nome", $nome);
                $resultado->bindParam(":ra", $ra);
                $resultado->bindParam(":id", $id);

                if ($resultado->execute())
                    header("Location: index.php");
                else
                    echo("<p>Erro ao alterar!</p>");
            }
        ?>
        <a href="index.php">Voltar</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>
