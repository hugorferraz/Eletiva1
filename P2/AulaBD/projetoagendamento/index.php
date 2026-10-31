<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Gestão - Início</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light"> 

        <!-- CONTEÚDO PRINCIPAL -->
        <div class="container py-4">
            <div class="text-center mb-5">
                <h1 class="fw-bold text-primary">Painel do Sistema</h1>
                <p class="text-muted fs-5">Selecione uma das opções abaixo para realizar o cadastro desejado.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <!-- CARD CLIENTE -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title fw-bold text-primary mb-3">Clientes</h3>
                            <p class="card-text text-muted flex-grow-1">
                                Cadastre novos clientes com informações de contato e endereço.
                            </p>
                            <a href="Cliente/cadastro_cliente.php" class="btn btn-outline-primary btn-lg fw-semibold mt-3">
                                Ir para Cadastro
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD SERVIÇO -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title fw-bold text-primary mb-3">Serviços</h3>
                            <p class="card-text text-muted flex-grow-1">
                                Cadastre e gerencie os serviços prestados, seus valores e duração.
                            </p>
                            <a href="Servico/cadastro_servico.php" class="btn btn-outline-primary btn-lg fw-semibold mt-3">
                                Ir para Cadastro
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD PROFISSIONAL -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title fw-bold text-primary mb-3">Profissionais</h3>
                            <p class="card-text text-muted flex-grow-1">
                                Cadastre a equipe de profissionais, suas funções e empresas associadas.
                            </p>
                            <a href="Profissional/cadastro_profissional.php" class="btn btn-outline-primary btn-lg fw-semibold mt-3">
                                Ir para Cadastro
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>