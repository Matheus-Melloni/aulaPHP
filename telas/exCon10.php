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
        <title>Tipo de Triângulo</title>
    </head>
   
    <body>
        <h1>Verificar Tipo de Triângulo</h1>
        <form method="POST">
            <label>Lado 1: </label>
            <input type="number" step="any" id="lado1" name="lado1"><br><br>
 
            <label>Lado 2: </label>
            <input type="number" step="any" id="lado2" name="lado2"><br><br>
 
            <label>Lado 3: </label>
            <input type="number" step="any" id="lado3" name="lado3"><br><br>
 
            <button type="submit">Verificar</button>
        </form>
 
        <?php
            if(isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3'])){
                $l1 = $_POST['lado1'];
                $l2 = $_POST['lado2'];
                $l3 = $_POST['lado3'];
               
                $resultado = $funcoes->verificaTriangulo($l1, $l2, $l3);
                echo "<br>O resultado é: " . $resultado;
            } else {
                echo "<br>Preencha os campos!";
            }
        ?>
    </body>
</html>