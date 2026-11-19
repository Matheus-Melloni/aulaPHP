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
    <title>Cálculo de Média</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Situação do Aluno</h1>
    <form method="POST">
        <label>Nota 1: </label>
        <input type="number" step="0.01" min="0" max="10" id="nota1" name="nota1"><br><br>
 
        <label>Nota 2: </label>
        <input type="number" step="0.01" min="0" max="10" id="nota2" name="nota2"><br><br>
 
        <label>Nota 3: </label>
        <input type="number" step="0.01" min="0" max="10" id="nota3" name="nota3"><br><br>
 
        <button type="submit">Calcular Média</button>
    </form>
 
    <?php
        if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])){
            $n1 = $_POST['nota1'];
            $n2 = $_POST['nota2'];
            $n3 = $_POST['nota3'];
           
            // Utilizando o método da classe Funcoes
            $resultado = $funcoes->verificaAprovacao($n1, $n2, $n3);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>