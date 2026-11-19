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
    <title>Soma dos dígitos</title>
</head>
<body>

    <h1>Soma dos dígitos</h1>

    <form method="POST">
        <label>Digite um número inteiro positivo:</label>
        <input type="number" name="numero" min="1" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
        if(isset($_POST['numero'])) {
            $numero = (int) $_POST['numero'];

            $resultado = $funcoes->somaDigitosWhile($numero);

            echo "<br>" . $resultado;
        }
    ?>

</body>
</html>