<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex23_ops'] = $_SESSION['ex23_ops'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex23_ops'] = [];
        } elseif (isset($_POST['opcao'])) {
            $opcao = (int) $_POST['opcao'];
            $num1 = (float) ($_POST['primeiroNumero'] ?? 0);
            $num2 = (float) ($_POST['segundoNumero'] ?? 0);

            $_SESSION['ex23_ops'][] = [
                'opcao' => $opcao,
                'num1' => $num1,
                'num2' => $num2
            ];

            $resultado = $funcoes->menuOperacoesMatematicas($_SESSION['ex23_ops']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 23 - Menu de Operações Matemáticas</title>
</head>
<body>
    <h1>Menu de operações matemáticas</h1>
    <p>1 – Somar | 2 – Subtrair | 3 – Multiplicar | 4 – Dividir | 0 – Sair</p>
    <form method="POST">
        <label>Opção: </label>
        <input type="number" id="opcao" name="opcao" min="0" max="4" required>
        <br><br>

        <label>Valor 1: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero">
        <br><br>

        <label>Valor 2: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero">
        <br><br>

        <button type="submit">Executar</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Reiniciar menu</button>
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