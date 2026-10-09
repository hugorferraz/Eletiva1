<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light"> 
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4">
                            <h2 class="card-title fw-bold text-primary mb-4 text-center">Cadastro de Cliente</h2>
                            
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
                                    <label for="telefone" class="form-label fw-semibold">Telefone</label>
                                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(00) 00000-0000" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">E-mail</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="nome@exemplo.com" required>
                                </div>
                                <div class="row g-2 mb-3">
                                    <div class="col-md-8">
                                        <label for="cep" class="form-label fw-semibold">CEP</label>
                                        <input type="text" id="cep" name="cep" class="form-control" placeholder="00000-000" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="numero" class="form-label fw-semibold">Número</label>
                                        <input type="text" id="numero" name="numero" class="form-control" placeholder="Nº" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="complemento" class="form-label fw-semibold">Complemento</label>
                                    <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Apto, Bloco, etc. (opcional)">
                                </div>
                                
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg fw-semibold">Salvar Cadastro</button>
                                </div>
                            </form>

                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    $nome = $_POST['nome'];
                                    $cpf = $_POST['cpf'];
                                    $telefone = $_POST['telefone'];
                                    $email = $_POST['email'];
                                    $cep = $_POST['cep'];
                                    $numero = $_POST['numero'];
                                    $complemento = $_POST['complemento'];

                                    require_once("conexao.php");
                                    $sql = "INSERT INTO clientes (nome, cpf, telefone, email, cep, numerocasa, complemento)
                                            VALUES (:nome, :cpf, :telefone, :email, :cep, :numero, :complemento)";
                                    $resultado = $con->prepare($sql);
                                    $resultado->bindParam(":nome", $nome);
                                    $resultado->bindParam(":cpf", $cpf);
                                    $resultado->bindParam(":telefone", $telefone);
                                    $resultado->bindParam(":email", $email);
                                    $resultado->bindParam(":cep", $cep);
                                    $resultado->bindParam(":numero", $numero);
                                    $resultado->bindParam(":complemento", $complemento);

                                    if ($resultado->execute())
                                        echo '<div class="alert alert-success border-0 shadow-sm mb-4" role="alert">Cliente inserido com sucesso!</div>';
                                    else
                                        echo '<div class="alert alert-danger border-0 shadow-sm mb-4" role="alert">Erro ao inserir o cliente!</div>';
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