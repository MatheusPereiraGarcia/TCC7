<?php
session_start();

// Destroi a sessão
session_unset(); // Libera todas as variáveis de sessão
session_destroy(); // Destrói a sessão

// Redireciona para a página inicial ou de login
header('Location: index.php');
exit();
?>