<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex25_alunos'] = $_SESSION['ex25_alunos'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex25_alunos'] = [];
        } elseif (isset($_POST['nota1'])) {
            $notas = [
                (float) ($_POST['nota1'] ?? 0),
                (float) ($_POST['nota2'] ?? 0),
                (float) ($_POST['nota3'] ?? 0)
            ];

            $_SESSION['ex25_alunos'][] = [
                'notas' => $notas,
                'continuar' => $_POST['continuar'] ?? 'n'
            ];

            $resultado = $funcoes->calculadoraMediaAlunos($_SESSION['ex25_alunos']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 25 - Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de média de alunos</h1>
    <form method="POST">
        <label>Nota 1: </label>
        <input type="number" step="any" id="nota1" name="nota1" required>
        <br><br>

        <label>Nota 2: </label>
        <input type="number" step="any" id="nota2" name="nota2" required>
        <br><br>

        <label>Nota 3: </label>
        <input type="number" step="any" id="nota3" name="nota3" required>
        <br><br>

        <label>Calcular média de outro aluno? (s/n): </label>
        <input type="text" id="continuar" name="continuar" value="s" maxlength="3" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Reiniciar</button>
    </form>
    <?php
        if ($resultado !== null) {
            echo "O resultado é: " . $resultado;
        } else {
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>