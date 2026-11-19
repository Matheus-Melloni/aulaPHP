<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex29_tentativas'] = $_SESSION['ex29_tentativas'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex29_tentativas'] = [];
        } elseif (isset($_POST['usuario'])) {
            $_SESSION['ex29_tentativas'][] = [
                'usuario' => $_POST['usuario'],
                'senha' => $_POST['senha'] ?? '',
                'continuar' => $_POST['continuar'] ?? 'n'
            ];

            $resultado = $funcoes->controleAcesso($_SESSION['ex29_tentativas']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 29 - Controle de Acesso</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Controle de acesso</h1>
    <form method="POST">
        <label>Usuário: </label>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>

        <label>Senha: </label>
        <input type="password" id="senha" name="senha" required>
        <br><br>

        <label>Tentar novamente? (s/n): </label>
        <input type="text" id="continuar" name="continuar" value="s" maxlength="3" required>
        <br><br>

        <button type="submit">Entrar</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Limpar tentativas</button>
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