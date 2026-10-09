<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro Serviço</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light"> 
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4">
                            <h2 class="card-title fw-bold text-primary mb-4 text-center">Cadastro de Serviço</h2>
                            
                            <form method="post">
                                <div class="mb-3">
                                    <label for="nome" class="form-label fw-semibold">Nome</label>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do serviço" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="descricao" class="form-label fw-semibold">Descrição</label>
                                    <textarea id="descricao" name="descricao" class="form-control" rows="3" placeholder="Breve descrição do serviço" required></textarea>
                                </div>
                                
                                <div class="row g-2 mb-3">
                                    <div class="col-md-6">
                                        <label for="valor" class="form-label fw-semibold">Valor (R$)</label>
                                        <input type="number" step="0.01" min="0" id="valor" name="valor" class="form-control" placeholder="0,00" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tempo" class="form-label fw-semibold">Tempo de Duração (Horas)</label>
                                        <input type="number" min="1" id="tempo" name="tempo" class="form-control" placeholder="Ex: 2" required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="ativo" class="form-label fw-semibold">Status do Serviço</label>
                                    <select id="ativo" name="ativo" class="form-select" required>
                                        <option value="1" selected>Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                                
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg fw-semibold">Salvar Cadastro</button>
                                </div>
                            </form>

                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    $nome = $_POST['nome'];
                                    $descricao = $_POST['descricao'];
                                    $valor = $_POST['valor'];
                                    $tempo = $_POST['tempo'];
                                    $ativo = $_POST['ativo'];

                                    require_once("conexao.php");
                                    $sql = "INSERT INTO servicos (nome, descricao, valor, tempoduracao, ativo)
                                            VALUES (:nome, :descricao, :valor, :tempo, :ativo)";
                                    $resultado = $con->prepare($sql);
                                    $resultado->bindParam(":nome", $nome);
                                    $resultado->bindParam(":descricao", $descricao);
                                    $resultado->bindParam(":valor", $valor);
                                    $resultado->bindParam(":tempo", $tempo);
                                    $resultado->bindParam(":ativo", $ativo, PDO::PARAM_INT);

                                    if ($resultado->execute())
                                        echo '<div class="alert alert-success border-0 shadow-sm mb-4" role="alert">Serviço inserido com sucesso!</div>';
                                    else
                                        echo '<div class="alert alert-danger border-0 shadow-sm mb-4" role="alert">Erro ao inserir o serviço!</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>