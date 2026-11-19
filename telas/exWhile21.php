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
    <title>Adivinhe o número</title>
</head>
<body>

    <h1>Adivinhe o número secreto</h1>

    <form method="POST">
        <label>Digite seus palpites:</label><br>
        <textarea name="palpites" required></textarea><br><br>

        <button type="submit">Verificar palpites</button>
    </form>

    <?php
        if(isset($_POST['palpites'])) {
            $palpites = array_map('intval', preg_split('/\s+/', trim($_POST['palpites'])));

            $resultado = $funcoes->adivinharNumero($palpites);

            echo "<br>" . $resultado;
        }
    ?>

</body>
</html>