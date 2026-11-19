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
    <title>Validação de idade</title>
</head>
<body>
    <h1>Validação de idade</h1>
    <form method="POST">
        <label for="idades">Digite sua idade:</label><br>
        <input type="text" id="idades" name="idades" required>
        <button type="submit">Validar</button>
    </form>

    <?php
    if (isset($_POST['idades'])) {
        // Divide a string por espaços e converte cada item para número inteiro
        $idades = array_map('intval', preg_split('/\s+/', trim($_POST['idades'])));
        
        $resultado = $funcoes->validarIdade($idades);
        echo "<br>" . $resultado;
    }
    ?>
</body>
</html>