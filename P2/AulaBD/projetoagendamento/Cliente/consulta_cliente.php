<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("..\conexao.php");
        $sql = "SELECT * FROM clientes WHERE id = :id";
        $resultado = $con->prepare($sql);
        $resultado->bindParam(':id', $id);
        $resultado->execute();
        $dados = $resultado->fetch();
        if (!$dados)
            die("Registro não encontrado!");
    } 
    else
        die("Não é possível abrir o arquivo!");
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dados do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body class="bg-light"> 
    <div class="container py-5" style="max-width: 650px;">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold text-primary mb-0">Dados do Cliente</h3>
                    <a href="../index.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
                </div>

                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($erro) ?></div>
                <?php endif; ?>

                <form method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-semibold">Nome Completo</label>
                        <input value="<?= htmlspecialchars($dados['nome']) ?>" type="text" id="nome" name="nome" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cpf" class="form-label fw-semibold">CPF</label>
                            <input value="<?= htmlspecialchars($dados['cpf']) ?>" type="text" id="cpf" name="cpf" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telefone" class="form-label fw-semibold">Telefone</label>
                            <input value="<?= htmlspecialchars($dados['telefone']) ?>" type="text" id="telefone" name="telefone" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">E-mail</label>
                        <input value="<?= htmlspecialchars($dados['email']) ?>" type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="cep" class="form-label fw-semibold">CEP</label>
                            <input value="<?= htmlspecialchars($dados['cep']) ?>" type="text" id="cep" name="cep" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="numerocasa" class="form-label fw-semibold">Número</label>
                            <input value="<?= htmlspecialchars($dados['numerocasa']) ?>" type="text" id="numerocasa" name="numerocasa" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="complemento" class="form-label fw-semibold">Complemento</label>
                            <input value="<?= htmlspecialchars($dados['complemento']) ?>" type="text" id="complemento" name="complemento" class="form-control">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button type="submit" class="btn btn-primary px-4 fw-semibold">Salvar Alterações</button>
                        <a href="excluir_cliente.php?id=<?= $dados['id'] ?>" 
                           class="btn btn-outline-danger btn-sm"
                           onclick="return confirm('Deseja realmente excluir este cliente?');">
                           Excluir Registro
                        </a>
                    </div>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $nome = $_POST['nome'];
                        $cpf = $_POST['cpf'];
                        $telefone = $_POST['telefone'];
                        $email = $_POST['email'];
                        $cep = $_POST['cep'];
                        $numerocasa = $_POST['numerocasa'];
                        $complemento = $_POST['complemento'];
                        $id = $_GET['id'];
                        require_once("..\conexao.php");
                        $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, telefone = :telefone, email = :email, cep = :cep, numerocasa = :numerocasa, complemento = :complemento WHERE id = :id";
                        $resultado = $con->prepare($sql);
                        $resultado->bindParam(":nome", $nome);
                        $resultado->bindParam(":cpf", $cpf);
                        $resultado->bindParam(":telefone", $telefone);
                        $resultado->bindParam(":email", $email);
                        $resultado->bindParam(":cep", $cep);
                        $resultado->bindParam(":numerocasa", $numerocasa);
                        $resultado->bindParam(":complemento", $complemento);
                        $resultado->bindParam(":id", $id);

                        if ($resultado->execute())
                            header("Location: ..\index.php");
                        else
                            echo("<p>Erro ao alterar!</p>");
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>