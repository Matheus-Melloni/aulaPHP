<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex24_produtos'] = $_SESSION['ex24_produtos'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex24_produtos'] = [];
        } elseif (isset($_POST['nomeProduto'])) {
            $_SESSION['ex24_produtos'][] = [
                'nome' => $_POST['nomeProduto'],
                'preco' => (float) ($_POST['precoProduto'] ?? 0),
                'continuar' => $_POST['continuar'] ?? 'n'
            ];

            $resultado = $funcoes->cadastroProdutos($_SESSION['ex24_produtos']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 24 - Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de produtos</h1>
    <form method="POST">
        <label>Nome do produto: </label>
        <input type="text" id="nomeProduto" name="nomeProduto" required>
        <br><br>

        <label>Preço: </label>
        <input type="number" step="0.01" id="precoProduto" name="precoProduto" required>
        <br><br>

        <label>Cadastrar outro produto? (s/n): </label>
        <input type="text" id="continuar" name="continuar" value="s" maxlength="3" required>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Limpar cadastro</button>
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