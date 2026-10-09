<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro Profissional</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light"> 
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4">
                            <h2 class="card-title fw-bold text-primary mb-4 text-center">Cadastro de Profissional</h2>
                            
                            <form method="post">
                                <div class="mb-3">
                                    <label for="nome" class="form-label fw-semibold">Nome</label>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome completo">
                                </div>
                                <div class="mb-3">
                                    <label for="cpf" class="form-label fw-semibold">CPF</label>
                                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">E-mail</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="nome@exemplo.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="funcao" class="form-label fw-semibold">Função</label>
                                    <input type="text" id="funcao" name="funcao" class="form-control" placeholder="Função que exerce" required>
                                </div>
                                <div class="mb-3">
                                    <label for="empresa" class="form-label fw-semibold">Empresa</label>
                                    <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Empresa que trabalha">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg fw-semibold">Salvar Cadastro</button>
                                </div>
                            </form>

                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    $nome = $_POST['nome'];
                                    $cpf = $_POST['cpf'];
                                    $email = $_POST['email'];
                                    $funcao = $_POST['funcao'];
                                    $empresa = $_POST['empresa'];

                                    require_once("conexao.php");
                                    $sql = "INSERT INTO profissionais (nome, cpf, email, funcao, empresa)
                                            VALUES (:nome, :cpf, :email, :funcao, :empresa)";
                                    $resultado = $con->prepare($sql);
                                    $resultado->bindParam(":nome", $nome);
                                    $resultado->bindParam(":cpf", $cpf);
                                    $resultado->bindParam(":email", $email);
                                    $resultado->bindParam(":funcao", $funcao);
                                    $resultado->bindParam(":empresa", $empresa);

                                    if ($resultado->execute())
                                        echo '<div class="alert alert-success border-0 shadow-sm mb-4" role="alert">Profissional inserido com sucesso!</div>';
                                    else
                                        echo '<div class="alert alert-danger border-0 shadow-sm mb-4" role="alert">Erro ao inserir o profissional!</div>';
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