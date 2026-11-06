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
    <title>bhaskara</title>
</head>
<body>
    <h1>Informe os valores de bhaskara</h1>
    <form method="POST">
        <label>Informe A: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero">
        <br><br>
 
        <label>Informe B: </label>
        <input type="number" id="segundoNumero" name="segundoNumero">
        <br><br>

        <label>Informe C: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero">
        <br><br>
 
        <button type="submit">calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
            $num1 = $_POST['primeiroNumero'];
            $num2 = $_POST['segundoNumero'];
            $num3 = $_POST['terceiroNumero'];           
 
            $resultado = $funcoes->calcularX1X2($num1,$num2,$num3);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
     if(isset($_POST['primeiroNumero'])){
        echo "O resultado da bhaskara é: ".$resultado;
     }else{
        echo "preencha os campos!";
     }
    ?>
</body>
</html>