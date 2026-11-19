<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex26_caixa'] = $_SESSION['ex26_caixa'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex26_caixa'] = [];
        } elseif (isset($_POST['acao'])) {
            $_SESSION['ex26_caixa'][] = [
                'acao' => $_POST['acao'],
                'valor' => (float) ($_POST['valor'] ?? 0)
            ];

            $resultado = $funcoes->caixaEletronico($_SESSION['ex26_caixa']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 26 - Caixa Eletrônico</title>
</head>
<body>
    <h1>Caixa eletrônico (Saldo inicial: R$ 1.500,00)</h1>
    <form method="POST">
        <label>Operação (saldo / saque / deposito / sair): </label>
        <input type="text" id="acao" name="acao" required>
        <br><br>

        <label>Valor: </label>
        <input type="number" step="0.01" id="valor" name="valor">
        <br><br>

        <button type="submit">Confirmar</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Resetar caixa</button>
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