<?php
    require_once("conexao.php");
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Gestão - Início</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light"> 

        <div class="container py-4">
            <div class="text-center mb-5">
                <h1 class="fw-bold text-primary">Painel do Sistema</h1>
                <p class="text-muted fs-5">Selecione uma das opções abaixo para realizar o cadastro desejado ou consultar os registros existentes.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                        <div class="card-body d-flex flex-column text-start">
                            <h3 class="card-title fw-bold text-primary mb-3 text-center">Clientes</h3>
                            <p class="card-text text-muted text-center">
                                Cadastre novos clientes com informações de contato e endereço.
                            </p>
                            <a href="Cliente/cadastro_cliente.php" class="btn btn-outline-primary btn-lg fw-semibold mt-2 mb-4 w-100">
                                Ir para Cadastro
                            </a>

                            <!-- LISTA DE CLIENTES -->
                            <hr>
                            <h5 class="fw-bold text-secondary mb-3">Lista de Clientes</h5>
                            <div class="flex-grow-1">
                                <?php
                                    $sqlClientes = "SELECT * FROM clientes";
                                    $resultadoClientes = $con->query($sqlClientes);
                                    $dadosClientes = $resultadoClientes->fetchAll();

                                    if (count($dadosClientes) > 0) {
                                        foreach ($dadosClientes as $c) {
                                            echo "<p class='mb-2 pb-1 border-bottom d-flex justify-content-between align-items-center'>";
                                            echo "<span><strong>Nome:</strong> " . htmlspecialchars($c['nome']) . "</span>";
                                            echo "<a href='Cliente/consulta_cliente.php?id=" . $c['id'] . "' class='btn btn-sm btn-info text-white'>Consultar</a>";
                                            echo "</p>";
                                        }
                                    } else {
                                        echo "<p class='text-muted small'>Nenhum cliente cadastrado.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                        <div class="card-body d-flex flex-column text-start">
                            <h3 class="card-title fw-bold text-primary mb-3 text-center">Serviços</h3>
                            <p class="card-text text-muted text-center">
                                Cadastre e gerencie os serviços prestados, seus valores e duração.
                            </p>
                            <a href="Servico/cadastro_servico.php" class="btn btn-outline-primary btn-lg fw-semibold mt-2 mb-4 w-100">
                                Ir para Cadastro
                            </a>

                            <!-- LISTA DE SERVIÇOS -->
                            <hr>
                            <h5 class="fw-bold text-secondary mb-3">Lista de Serviços</h5>
                            <div class="flex-grow-1">
                                <?php
                                    $sqlServicos = "SELECT * FROM servicos";
                                    $resultadoServicos = $con->query($sqlServicos);
                                    $dadosServicos = $resultadoServicos->fetchAll();

                                    if (count($dadosServicos) > 0) {
                                        foreach ($dadosServicos as $s) {
                                            echo "<p class='mb-2 pb-1 border-bottom d-flex justify-content-between align-items-center'>";
                                            echo "<span><strong>Nome:</strong> " . htmlspecialchars($s['nome']) . "</span>";
                                            echo "<a href='Servico/consulta_servico.php?id=" . $s['id'] . "' class='btn btn-sm btn-info text-white'>Consultar</a>";
                                            echo "</p>";
                                        }
                                    } else {
                                        echo "<p class='text-muted small'>Nenhum serviço cadastrado.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                        <div class="card-body d-flex flex-column text-start">
                            <h3 class="card-title fw-bold text-primary mb-3 text-center">Profissionais</h3>
                            <p class="card-text text-muted text-center">
                                Cadastre a equipe de profissionais, suas funções e empresas associadas.
                            </p>
                            <a href="Profissional/cadastro_profissional.php" class="btn btn-outline-primary btn-lg fw-semibold mt-2 mb-4 w-100">
                                Ir para Cadastro
                            </a>

                            <!-- LISTA DE PROFISSIONAIS -->
                            <hr>
                            <h5 class="fw-bold text-secondary mb-3">Lista de Profissionais</h5>
                            <div class="flex-grow-1">
                                <?php
                                    $sqlProfissionais = "SELECT * FROM profissionais";
                                    $resultadoProfissionais = $con->query($sqlProfissionais);
                                    $dadosProfissionais = $resultadoProfissionais->fetchAll();

                                    if (count($dadosProfissionais) > 0) {
                                        foreach ($dadosProfissionais as $p) {
                                            echo "<p class='mb-2 pb-1 border-bottom d-flex justify-content-between align-items-center'>";
                                            echo "<span><strong>Nome:</strong> " . htmlspecialchars($p['nome']) . "</span>";
                                            echo "<a href='Profissional/consulta_profissional.php?id=" . $p['id'] . "' class='btn btn-sm btn-info text-white'>Consultar</a>";
                                            echo "</p>";
                                        }
                                    } else {
                                        echo "<p class='text-muted small'>Nenhum profissional cadastrado.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>