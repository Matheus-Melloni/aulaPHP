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
    <h1>Media nota aluno</h1>
    <form method="POST">
        <label>Nota 1: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>

        <label>Nota 2: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>

        <label>Nota 3: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>

        <label>Nota 4: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>

        <label>Nota 5: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>

        <label>Nota 6: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>

        <label>Nota 7: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>

        <label>Nota 8: </label>
        <input type="numero" step="any" name="notas[]" required><br><br>



        <button type="submit">Calcular
        <?php
            if(isset($_POST['notas'])){
                $notas = $_POST['notas'];
  
                $resultado = $funcoes->mediaOitoNotas($notas);//Utilizando o método da classe Funcoes
            }            
        ?>
    </button>
    </form>
    <?php
     if(isset($_POST['notas'])){
        echo "O resultado é: ".$resultado;
     }else{
        echo "preencha os campos!";
     }
    ?>
</body>
</html>