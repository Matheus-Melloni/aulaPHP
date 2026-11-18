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
    <title>Classificação Profissional</title>
</head>
    <body>
        <h1>Classificar Experiência Profissional</h1>
        <form method="POST">
            <label>Tempo de Experiência (anos): </label>
            <input type="number" step="any" min="0" id="anos" name="anos"><br><br>
 
            <button type="submit">Classificar</button>
        </form>
 
        <?php
            if(isset($_POST['anos'])){
                $anos = $_POST['anos'];
 
                $resultado = $funcoes->classificaExperiencia($anos);
                echo "<br>O resultado é: " . $resultado;
            } else {
                echo "<br>Preencha os campos!";
            }
        ?>
    </body>
</html>