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
    <title>Senha de acesso</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <h1>Senha de acesso</h1>

    <form method="POST">
        <label>Digite as tentativas de senha :</label><br>
        <textarea name="senhas" required></textarea><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
        if(isset($_POST['senhas'])) {
            $senhas = preg_split('/\s+/', trim($_POST['senhas']));

            $resultado = $funcoes->senhaAcesso($senhas);

            echo "<br>" . $resultado;
        }
    ?>

</body>
</html>