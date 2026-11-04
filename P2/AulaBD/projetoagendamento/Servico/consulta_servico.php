<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("..\conexao.php");
        $sql = "SELECT * FROM servicos WHERE id = :id";
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
    <title>Dados do Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body class="bg-light"> 
    <div class="container py-5" style="max-width: 650px;">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold text-primary mb-0">Dados do Serviço</h3>
                    <a href="../index.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
                </div>

                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($erro) ?></div>
                <?php endif; ?>

                <form method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-semibold">Nome</label>
                        <input value="<?= htmlspecialchars($dados['nome']) ?>" type="text" id="nome" name="nome" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="descricao" class="form-label fw-semibold">Descrição</label>
                        <input value="<?= htmlspecialchars($dados['descricao']) ?>" type="text" id="descricao" name="descricao" class="form-control" required>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="valor" class="form-label fw-semibold">Valor (R$)</label>
                            <input value="<?= htmlspecialchars($dados['valor']) ?>" type="number" step="0.01" id="valor" name="valor" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tempoduracao" class="form-label fw-semibold">Tempo de Duração (Horas)</label>
                            <input value="<?= htmlspecialchars($dados['tempoduracao']) ?>" type="number" id="tempoduracao" name="tempoduracao" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="ativo" class="form-label fw-semibold">Status do Serviço</label>
                        <select id="ativo" name="ativo" class="form-select" required>
                            <option option value="1" <?= ($dados['ativo'] == 1) ? 'selected' : '' ?>>Ativo</option>
                            <option option value="0" <?= ($dados['ativo'] == 0) ? 'selected' : '' ?>>Inativo</option>
                        </select>
                    </div>  

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button type="submit" class="btn btn-primary px-4 fw-semibold">Salvar Alterações</button>
                        <a href="excluir_servico.php?id=<?= $dados['id'] ?>" 
                           class="btn btn-outline-danger btn-sm"
                           onclick="return confirm('Deseja realmente excluir este serviço?');">
                           Excluir Registro
                        </a>
                    </div>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $nome = $_POST['nome'];
                        $descricao = $_POST['descricao'];
                        $valor = $_POST['valor'];
                        $tempoduracao = $_POST['tempoduracao'];
                        $ativo = $_POST['ativo'];
                        $id = $_GET['id'];
                        require_once("..\conexao.php");
                        $sql = "UPDATE servicos SET nome = :nome, descricao = :descricao, valor = :valor, tempoduracao = :tempoduracao, ativo = :ativo WHERE id = :id";
                        $resultado = $con->prepare($sql);
                        $resultado->bindParam(":nome", $nome);
                        $resultado->bindParam(":descricao", $descricao);
                        $resultado->bindParam(":valor", $valor);
                        $resultado->bindParam(":tempoduracao", $tempoduracao);
                        $resultado->bindParam(":ativo", $ativo);
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