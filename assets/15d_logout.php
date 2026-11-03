<?php
session_start();

// Apaga os dados armazenados na sessão.
session_unset();
session_destroy();

// Volta para a página de login.
header("Location: 15d_login.php");
exit();
?>
