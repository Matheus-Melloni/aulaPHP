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
    <title>Crescimento de investimento</title>
</head>
<body>

    <h1>Crescimento de investimento</h1>

    <form method="POST">
        <button type="submit">Calcular investimento</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $resultado = $funcoes->crescimentoInvestimento();

            echo "<br>" . $resultado;
        }
    ?>

</body>
</html>
