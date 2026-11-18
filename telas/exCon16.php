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
    <title>Verificar Entrada</title>
</head>
<body>
    <h1>Verificar Permissão de Entrada</h1>
    <form method="POST">
        <label>Idade: </label>
        <input type="number" min="0" id="idade" name="idade"><br><br>
 
        <button type="submit">Verificar</button>
    </form>
 
    <?php
        if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
           
            // Utilizando o método da classe Funcoes
            $resultado = $funcoes->verificaEntrada($idade);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>