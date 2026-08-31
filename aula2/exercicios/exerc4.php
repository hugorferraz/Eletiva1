<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTA 2 - Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercício 4</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="numMes" class="form-label">Informe o número do mês: </label>
                    <input type="number" id="numMes" name="numMes" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <?php
            if ($_POST){
                $numMes = $_POST['numMes'];

                switch($numMes){
                    case 1:
                        echo "1 - Janeiro";
                        break;
                    case 2:
                        echo "2 - Fevereiro";
                        break;
                    case 3:
                        echo "3 - Março";
                        break;
                    case 4:
                        echo "4 - Abril";
                        break;
                    case 5:
                        echo "5 - Maio";
                        break;
                    case 6:
                        echo "6 - Junho";
                        break;
                    case 7:
                        echo "7 - Julho";
                        break;
                    case 8:
                        echo "8 - Agosto";
                        break;
                    case 9:
                        echo "9 - Setembro";
                        break;
                    case 10:
                        echo "10 - Outubro";
                        break;
                    case 11:
                        echo "11 - Novembro";
                        break;
                    case 12:
                        echo "12 - Dezembro";
                        break;
                }
            }    
        ?>
    </div>
</body>
</html>