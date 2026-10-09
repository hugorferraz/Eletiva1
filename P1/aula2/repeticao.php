<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estrutura de Repetição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Estrutura de Repetição</h1>
        <form method="post">
            <div class="mb-3">
                <label for="numero" class="form-label">Informe o número</label>
                <input type="number" id="numero" name="numero" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <?php
            if($_POST){
                //Exibir o valor de 0 até o número que foi lido no formulário
                echo "<p>Exibir o valor de 0 até o número que foi lido no formulário</p>";
                $numero = $_POST['numero'];
                $controle = 0;
                while($controle <= $numero){
                    echo "<p>$controle</p>";
                    $controle++;
                }
                
                //Mostrando como funciona o do-while
                echo "<p>Mostrando como funciona o do-while</p>";
                $contador = 0;
                do{
                    echo "<p>$contador</p>";
                    $contador++;
                }while($contador < 2);

                //Mostrando como funciona o for
                echo "<p>Funcionamento do for:</p>";
                for($i=0;$i<=10;$i++){
                    echo "<p>Valor de i: $i</p>";
                }
            }

        ?>
    </div>
</body>
</html>