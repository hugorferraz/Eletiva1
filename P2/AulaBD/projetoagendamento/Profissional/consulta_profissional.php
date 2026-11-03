<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("..\conexao.php");
        $sql = "SELECT * FROM profissionais WHERE id = :id";
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
    <title>Dados do Profissional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body class="bg-light"> 
    <div class="container py-5" style="max-width: 650px;">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold text-primary mb-0">Dados do Profissional</h3>
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
                    
                    <div class="mb-3">
                        <label for="cpf" class="form-label fw-semibold">CPF</label>
                        <input value="<?= htmlspecialchars($dados['cpf']) ?>" type="text" id="cpf" name="cpf" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">E-mail</label>
                        <input value="<?= htmlspecialchars($dados['email']) ?>" type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="funcao" class="form-label fw-semibold">Função</label>
                        <input value="<?= htmlspecialchars($dados['funcao']) ?>" type="text" id="funcao" name="funcao" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="empresa" class="form-label fw-semibold">Empresa</label>
                        <input value="<?= htmlspecialchars($dados['empresa']) ?>" type="text" id="empresa" name="empresa" class="form-control" required>
                    </div>  

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button type="submit" class="btn btn-primary px-4 fw-semibold">Salvar Alterações</button>
                        <a href="excluir_profissional.php?id=<?= $dados['id'] ?>" 
                           class="btn btn-outline-danger btn-sm"
                           onclick="return confirm('Deseja realmente excluir este profissional?');">
                           Excluir Registro
                        </a>
                    </div>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $nome = $_POST['nome'];
                        $cpf = $_POST['cpf'];
                        $email = $_POST['email'];
                        $funcao = $_POST['funcao'];
                        $empresa = $_POST['empresa'];
                        $id = $_GET['id'];
                        require_once("..\conexao.php");
                        $sql = "UPDATE profissionais SET nome = :nome, cpf = :cpf, email = :email, funcao = :funcao, empresa = :empresa WHERE id = :id";
                        $resultado = $con->prepare($sql);
                        $resultado->bindParam(":nome", $nome);
                        $resultado->bindParam(":cpf", $cpf);
                        $resultado->bindParam(":email", $email);
                        $resultado->bindParam(":funcao", $funcao);
                        $resultado->bindParam(":empresa", $empresa);
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