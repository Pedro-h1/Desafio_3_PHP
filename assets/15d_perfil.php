<?php
session_start();

// Verifica se existe um usuário na sessão.
if (!isset($_SESSION['usuario'])) {
    header("Location: 15d_login.php");
    exit();
}

// Recupera o usuário e a cor escolhida no login.
$usuario = htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8');
$cor_fundo = $_SESSION['cor_fundo'] ?? '#f3f4f6';

// Confere a cor antes de utilizá-la no CSS.
if (!preg_match('/^#[0-9A-Fa-f]{6}$/', $cor_fundo)) {
    $cor_fundo = "#f3f4f6";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo $cor_fundo; ?>;
            margin: 0;
            padding: 40px 20px;
        }
        .perfil {
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.90);
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.10);
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 18px;
            color: white;
            background-color: #333;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main class="perfil">
        <h1>Bem-vindo, <?php echo $usuario; ?>!</h1>
        <p>Você entrou no sistema com sucesso.</p>
        <p>Esta é a sua página de perfil.</p>
        <a href="15d_logout.php">Sair do sistema</a>
    </main>
</body>
</html>
