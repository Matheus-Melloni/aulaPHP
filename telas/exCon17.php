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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Saldo Bancário</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Verificar Saldo Bancário</h1>
    <form method="POST">
        <label>Saldo (R$): </label>
        <input type="number" step="any" id="saldo" name="saldo"><br><br>
 
        <button type="submit">Verificar</button>
    </form>
 
    <?php
        if(isset($_POST['saldo'])){
            $saldo = $_POST['saldo'];
           
            // Utilizando o método da classe Funcoes
            $resultado = $funcoes->verificaSaldo($saldo);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>
 