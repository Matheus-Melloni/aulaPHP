<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php"); // Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; // Acessando a classe
 
    $funcoes = new Funcoes(); // Criando um vínculo com a classe Funcoes
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Localização de número</title>
</head>
<body>

    <h1>Localização do número 50</h1>

    <form method="POST">
        <label>Digite os números:</label><br>
        <textarea name="numeros" required></textarea><br><br>

        <button type="submit">Procurar</button>
    </form>

    <?php
        if(isset($_POST['numeros'])) {
            $numeros = array_map('intval', preg_split('/\s+/', trim($_POST['numeros'])));

            $resultado = $funcoes->localizarNumero($numeros);

            echo "<br>" . $resultado;
        }
    ?>

</body>
</html>
