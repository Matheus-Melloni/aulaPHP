<?php
    namespace Projeto\Exercicios\telas;
    session_start();
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $_SESSION['ex27_avaliacoes'] = $_SESSION['ex27_avaliacoes'] ?? [];
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['limpar'])) {
            $_SESSION['ex27_avaliacoes'] = [];
        } elseif (isset($_POST['nota'])) {
            $_SESSION['ex27_avaliacoes'][] = [
                'nota' => (int) $_POST['nota'],
                'continuar' => $_POST['continuar'] ?? 'n'
            ];

            $resultado = $funcoes->pesquisaSatisfacao($_SESSION['ex27_avaliacoes']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 27 - Pesquisa de Satisfação</title>
</head>
<body>
    <h1>Pesquisa de satisfação (1 a 5)</h1>
    <form method="POST">
        <label>Nota (1 a 5): </label>
        <input type="number" id="nota" name="nota" min="1" max="5" required>
        <br><br>

        <label>Registrar outra avaliação? (s/n): </label>
        <input type="text" id="continuar" name="continuar" value="s" maxlength="3" required>
        <br><br>

        <button type="submit">Registrar</button>
    </form>
    <form method="POST">
        <button type="submit" name="limpar" value="1">Limpar avaliações</button>
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