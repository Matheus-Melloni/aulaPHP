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
    <title>Classificação de Temperatura</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Verificar Temperatura</h1>
    <form method="POST">
        <label>Temperatura (°C): </label>
        <input type="number" step="any" id="temperatura" name="temperatura"><br><br>
 
        <button type="submit">Verificar</button>
    </form>
 
    <?php
        if(isset($_POST['temperatura'])){
            $temperatura = $_POST['temperatura'];
 
            $resultado = $funcoes->classificaTemperatura($temperatura);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>