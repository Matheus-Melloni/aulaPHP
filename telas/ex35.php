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
</head>
<body>
    <h1>Saldo em conta bancaria</h1>
    <form method="POST">
        <label>saldo: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero">
        <br><br>

        

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
            $num1 = $_POST['primeiroNumero'];

            $resultado = $funcoes->saldoContaBancaria($num1);//Utilizando o método da classe Funcoes
            }            
        ?>
    </button>
    </form>
    <?php
     if(isset($_POST['primeiroNumero'])){
        echo "O resultado é: ".$resultado;
     }else{
        echo "preencha os campos!";
     }
    ?>
</body>
</html>