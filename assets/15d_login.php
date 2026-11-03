<?php
session_start();

// Se o usuário já estiver logado, vai direto para o perfil.
if (isset($_SESSION['usuario'])) {
    header("Location: 15d_perfil.php");
    exit();
}

$mensagem = "";
$usuario_digitado = "";
$cor_fundo = "#f3f4f6";

// Verifica se o formulário foi enviado.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_digitado = trim($_POST['usuario'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $cor_fundo = $_POST['cor_fundo'] ?? '#f3f4f6';

    // Aceita somente cores no formato hexadecimal (#RRGGBB).
    if (!preg_match('/^#[0-9A-Fa-f]{6}$/', $cor_fundo)) {
        $cor_fundo = "#f3f4f6";
    }

    // Dados de conexão com o banco de dados.
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se a conexão funcionou.
    if ($conn->connect_error) {
        $mensagem = "Erro ao conectar ao banco de dados. Verifique as configurações de conexão.";
    } else {
        $conn->set_charset("utf8mb4");

        // Procura o usuário e a senha na tabela usuarios.
        // A consulta preparada evita inserir diretamente os dados no SQL.
        $sql = "SELECT usuario FROM usuarios WHERE usuario = ? AND senha = ? LIMIT 1";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $usuario_digitado, $senha);
            $stmt->execute();
            $stmt->bind_result($usuario_encontrado);

            // Se encontrou um registro, cria a sessão.
            if ($stmt->fetch()) {
                session_regenerate_id(true);
                $_SESSION['usuario'] = $usuario_encontrado;
                $_SESSION['cor_fundo'] = $cor_fundo;

                $stmt->close();
                $conn->close();

                header("Location: 15d_perfil.php");
                exit();
            } else {
                $mensagem = "Usuário ou senha incorretos!";
            }

            $stmt->close();
        } else {
            $mensagem = "Não foi possível consultar os usuários no banco de dados.";
        }

        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 40px 20px;
        }
        .container {
            max-width: 360px;
            margin: 40px auto;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.10);
        }
        h1 { text-align: center; }
        label { display: block; margin-top: 15px; }
        input:not([type="color"]) {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }
        input[type="color"] {
            width: 100%;
            height: 42px;
            margin-top: 5px;
            cursor: pointer;
        }
        button {
            width: 100%;
            padding: 11px;
            margin-top: 20px;
            border: 0;
            border-radius: 5px;
            color: white;
            background-color: #333;
            cursor: pointer;
        }
        .erro { color: red; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Entrar</h1>

        <form method="post" action="">
            <label for="usuario">Usuário:</label>
            <input
                type="text"
                id="usuario"
                name="usuario"
                value="<?php echo htmlspecialchars($usuario_digitado, ENT_QUOTES, 'UTF-8'); ?>"
                required
            >

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="cor_fundo">Cor de fundo do perfil:</label>
            <input
                type="color"
                id="cor_fundo"
                name="cor_fundo"
                value="<?php echo htmlspecialchars($cor_fundo, ENT_QUOTES, 'UTF-8'); ?>"
            >

            <button type="submit">Entrar</button>
        </form>

        <?php if ($mensagem != "") { ?>
            <p class="erro"><?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php } ?>
    </div>
</body>
</html>
