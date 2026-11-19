<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe
 
    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Contar numeros pares</h1>
    <form method="POST">
        
    <label>Número 1:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 2:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 3:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 4:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 5:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 6:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 7:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 8:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 9:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 10:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 11:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 12:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 13:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 14:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 15:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 16:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 17:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 18:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 19:</label>
    <input type="number" name="numeros[]" required><br><br>

    <label>Número 20:</label>
    <input type="number" name="numeros[]" required><br><br>


    <button type="submit">Calcular
        <?php
            if(isset($_POST['numeros'])){
                $numeros = $_POST['numeros'];
                $resultado = $funcoes->contarNumerosPares($numeros);//Utilizando o método da classe Funcoes
            }            
        ?>
    </button>
    </form>
    <?php
     if(isset($_POST['numeros'])){
        echo "O resultado é: ".$resultado;
     }else{
        echo "preencha os campos!";
     }
    ?>
</body>
</html>