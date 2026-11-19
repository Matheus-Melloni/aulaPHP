<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex30_conversoes'] = $_SESSION['ex30_conversoes'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex30_conversoes'] = [];
        } elseif (isset($_POST['reais'])) {
            $_SESSION['ex30_conversoes'][] = [
                'reais' => (float) $_POST['reais'],
                'cotacao' => (float) ($_POST['cotacao'] ?? 0),
                'continuar' => $_POST['continuar'] ?? 'n'
            ];

            $resultado = $funcoes->conversorMoedas($_SESSION['ex30_conversoes']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 30 - Conversor de Moedas</title>
</head>
<body>
    <h1>Conversor de moedas (Real para Dólar)</h1>
    <form method="POST">
        <label>Valor em Reais (R$): </label>
        <input type="number" step="0.01" id="reais" name="reais" required>
        <br><br>

        <label>Cotação do Dólar: </label>
        <input type="number" step="0.01" id="cotacao" name="cotacao" required>
        <br><br>

        <label>Realizar nova operação? (s/n): </label>
        <input type="text" id="continuar" name="continuar" value="s" maxlength="3" required>
        <br><br>

        <button type="submit">Converter</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Limpar conversões</button>
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