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
    <title>Classificação de Pacote</title>
</head>
<body>
    <h1>Classificar Peso do Pacote</h1>
    <form method="POST">
        <label>Peso (kg): </label>
        <input type="number" step="0.01" min="0" id="peso" name="peso"><br><br>
 
        <button type="submit">Classificar</button>
    </form>
 
    <?php
        if(isset($_POST['peso'])){
            $peso = $_POST['peso'];
           
            // Utilizando o método da classe Funcoes
            $resultado = $funcoes->classificaPacote($peso);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>