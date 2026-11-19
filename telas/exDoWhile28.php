<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex28_compras'] = $_SESSION['ex28_compras'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex28_compras'] = [];
        } elseif (isset($_POST['valorCompra'])) {
            $_SESSION['ex28_compras'][] = [
                'valor' => (float) $_POST['valorCompra'],
                'continuar' => $_POST['continuar'] ?? 'n'
            ];

            $resultado = $funcoes->calculadoraDescontos($_SESSION['ex28_compras']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 28 - Calculadora de Descontos</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Calculadora de descontos (10% acima de R$ 200,00)</h1>
    <form method="POST">
        <label>Valor da compra: </label>
        <input type="number" step="0.01" id="valorCompra" name="valorCompra" required>
        <br><br>

        <label>Calcular outra compra? (s/n): </label>
        <input type="text" id="continuar" name="continuar" value="s" maxlength="3" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Limpar compras</button>
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