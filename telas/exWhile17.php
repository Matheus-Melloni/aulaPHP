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
    <title>Divisão sucessiva</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <h1>Divisão sucessiva</h1>

    <form method="POST">
        <label>Digite um número inteiro positivo:</label>
        <input type="number" name="numero" min="1" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
        if(isset($_POST['numero'])) {
            $numero = (int) $_POST['numero'];

            $resultado = $funcoes->divisaoSucessiva($numero);

            echo "<br>" . $resultado;
        }
    ?>

</body>
</html>
