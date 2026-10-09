<!--Exercício - Verificar se um valor é igual ou diferente de 10 -->
<!--https://vanessaborges2.github.io/Gerador-Formulario/-->

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estrutura Condicional - If e Switch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
    <body> 
        <div class="container py-3">
            <h1>Estrutura Condicional - If e Switch</h1>
            <form method="post" action="selecao.php">
                <div class="mb-3">
                <label for="numero" class="form-label">Informe o número</label>
                <input type="number" id="numero" name="numero" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        
        <?php
            //Comentário em linha ou 
            #Comentário em linha =
            /*
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

            }*/
            // Condições:  ==   !=   <  >  >=   <=
            // Operadores:   and - &&       !       or -  ||
            if($_POST){
                $numero = $_POST['numero'];

                if($numero == 10){
                    echo "<p>Valor igual a 10</p>";
                }elseif($numero < 0){
                    echo "<p>Valor diferente de 10 e é negativo</p>";
                }elseif($numero > 0)
                    echo "<p>Valor diferente de 10 e é positivo</p>";
                else
                    echo "<p>Valor igual a zero!<p>";

                switch($numero){
                    case 1:
                        echo "Valor igual a 1";
                        break;
                    case 2:
                        echo "Valor igual a 2";
                        break;
                    case 3:
                        echo "Valor igual a 3";
                        break;
                    default:
                        echo "Valor diferente de 1, 2 ou 3";
                        break;
                }

            }
        ?>
        </div>
        
    </body>
</html>