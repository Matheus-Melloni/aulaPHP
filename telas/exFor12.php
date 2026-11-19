<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe
 
    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Divisivel</h1>
    <form method="POST">
        <label>Número 1: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 2: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 3: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 4: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 5: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 6: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 7: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 8: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 9: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 10: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 11: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 12: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 13: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 14: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 15: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 16: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 17: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 18: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 19: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 20: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 21: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 22: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 23: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 24: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 25: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 26: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 27: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 28: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 29: </label>
        <input type="number" name="numeros[]" required><br><br>

        <label>Número 30: </label>
        <input type="number" name="numeros[]" required><br><br>



        <button type="submit">Calcular
        <?php
            if(isset($_POST['numeros'])){
                $numeros = $_POST['numeros'];
  
                $resultado = $funcoes->divisibilidadeTres($numeros);//Utilizando o método da classe Funcoes
            }            
        ?>
    </button>
    </form>
    <?php
     if(isset($_POST['numeros'])){
        echo "O resultado é: ".$resultado;
     }else{
        echo "Preencha os campos!";
     }
    ?>
</body>
</html>