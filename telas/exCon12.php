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
    <title>Converter Nota para Conceito</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Converter Nota em Conceito</h1>
    <form method="POST">
        <label>Nota (0 a 10): </label>
        <input type="number" step="0.01" min="0" max="10" id="nota" name="nota"><br><br>
 
        <button type="submit">Converter</button>
    </form>
 
    <?php
        if(isset($_POST['nota'])){
            $nota = $_POST['nota'];
           
            $resultado = $funcoes->converteConceito($nota);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>