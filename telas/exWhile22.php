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
    <title>Contagem regressiva</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <h1>Contagem regressiva por intervalo</h1>

    <form method="POST">
        <label>Valor inicial:</label>
        <input type="number" name="inicial" required><br><br>

        <label>Valor final:</label>
        <input type="number" name="final" required><br><br>

        <button type="submit">Contar</button>
    </form>

    <?php
        if(isset($_POST['inicial']) && isset($_POST['final'])) {
            $inicial = (int) $_POST['inicial'];
            $final = (int) $_POST['final'];

            $resultado = $funcoes->contagemIntervalo($inicial, $final);

            echo "<br>" . $resultado;
        }
    ?>

</body>
</html>