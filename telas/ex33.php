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
    <h1>Media ponderada</h1>
    <form method="POST">
        <label>Nota 1: </label>
        <input type="number" step="any" id="nota1" name="nota1">
        <br><br>

        <label>peso 1: </label>
        <input type="number" step="any" id="peso1" name="peso1">
        <br><br>

        <label>Nota 2: </label>
        <input type="number" step="any" id="nota2" name="nota2">
        <br><br>

        <label>peso 2: </label>
        <input type="number" step="any" id="peso2" name="peso2">
        <br><br>

        <label>Nota 3: </label>
        <input type="number" step="any" id="nota3" name="nota3">
        <br><br>

        <label>peso 3: </label>
        <input type="number" step="any" id="peso3" name="peso3">
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['nota1'], $_POST['peso1'], $_POST['nota2'], $_POST['peso2'], $_POST['nota3'], $_POST['peso3'])){
                $n1 = (float)$_POST['nota1'];
                $p1 = (float)$_POST['peso1'];
                $n2 = (float)$_POST['nota2'];
                $p2 = (float)$_POST['peso2'];
                $n3 = (float)$_POST['nota3'];
                $p3 = (float)$_POST['peso3'];

                $resultado = $funcoes->mediaPonderada($n1, $p1, $n2, $p2, $n3, $p3);//Utilizando o método da classe Funcoes
            }            
        ?>
        </button>
    </form>
    <?php
     if(isset($resultado)){
        echo "O resultado é: ".$resultado;
     }else{
        echo "preencha os campos!";
     }
    ?>
</body>
</html>
