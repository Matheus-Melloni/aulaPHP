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
        <title>Dia da Semana</title>
    </head>
 
    <body>
        <h1>Verificar Dia da Semana</h1>
        <form method="POST">
            <label>Número (1 a 7): </label>
            <input type="number" id="dia" name="dia" min="1" max="7"><br><br>
 
            <button type="submit">Mostrar Dia</button>
        </form>
 
        <?php
            if(isset($_POST['dia'])){
                $dia = $_POST['dia'];
               
                $resultado = $funcoes->mostraDiaSemana($dia);
                echo "<br>O resultado é: " . $resultado;
            } else {
                echo "<br>Preencha os campos!";
            }
        ?>
    </body>
</html>