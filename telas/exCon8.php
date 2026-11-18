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
    <title>Verificar Intervalo</title>
</head>
<body>
    <h1>Verificar Intervalo</h1>
    <form method="POST">
        <label>Número a verificar: </label>
        <input type="number" step="any" id="numero" name="numero"><br><br>
 
        <label>Valor Mínimo: </label>
        <input type="number" step="any" id="minimo" name="minimo"><br><br>
 
        <label>Valor Máximo: </label>
        <input type="number" step="any" id="maximo" name="maximo"><br><br>
 
        <button type="submit">Verificar</button>
    </form>
 
    <?php
        if(isset($_POST['numero']) && isset($_POST['minimo']) && isset($_POST['maximo'])){
            $numero = $_POST['numero'];
            $minimo = $_POST['minimo'];
            $maximo = $_POST['maximo'];
           
            // Utilizando o método da classe Funcoes
            $resultado = $funcoes->verificaIntervalo($numero, $minimo, $maximo);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>