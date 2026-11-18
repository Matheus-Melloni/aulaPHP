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
</head>
<body>
    <h1>Contagem Crescente</h1>
    <form method="POST">
        <label>Temperatura 1: </label>
        <input type="numero" step="any" name="temperaturas[]" required><br><br>

        <label>Temperatura 2: </label>
        <input type="numero" step="any" name="temperaturas[]" required><br><br>

        <label>Temperatura 3: </label>
        <input type="numero" step="any" name="temperaturas[]" required><br><br>

        <label>Temperatura 4: </label>
        <input type="numero" step="any" name="temperaturas[]" required><br><br>

        <label>Temperatura 5: </label>
        <input type="numero" step="any" name="temperaturas[]" required><br><br>

        <label>Temperatura 6: </label>
        <input type="numero" step="any" name="temperaturas[]" required><br><br>

        <label>Temperatura 7: </label>
        <input type="numero" step="any" name="temperaturas[]" required><br><br>



        <button type="submit">Calcular
        <?php
            if(isset($_POST['temperaturas'])){
                $temperaturas = $_POST['temperaturas'];
  
                $resultado = $funcoes->analisarTemperaturas($temperaturas);//Utilizando o método da classe Funcoes
            }            
        ?>
    </button>
    </form>
    <?php
     if(isset($_POST['temperaturas'])){
        echo "O resultado é: ".$resultado;
     }else{
        echo "Preencha os campos!";
     }
    ?>
</body>
</html>