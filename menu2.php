<?php require_once("verificaAutenticacao.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math App</title>
    <link rel="stylesheet" href="css/principal.css"> <!-- Certifique-se de que o caminho está correto -->
    <script src="js/menu.js"></script>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="container-navbar">
                <a class="navbar-brand" href="menu.php">Fluxio</a>
                <div class="navbar-toggle" onclick="toggleMenu()">
                    <span class="navbar-toggler-icon"></span>
                </div>
                <div class="navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" onclick="toggleDropdown(event)">Cadastros</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="cadastro-usuario.php">Usuário</a></li>
                                <li><a class="dropdown-item" href="cadastro-cliente.php">Cliente</a></li>
                                <li><a class="dropdown-item" href="cadastro-produtos.php">Produtos</a></li>
                                <li><a class="dropdown-item" href="cadastro-grupo.php">Grupo</a></li>
                                <li><a class="dropdown-item" href="cadastro-marca.php">Marca</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                onclick="toggleDropdown(event)">Movimentações</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Abrir Venda</a></li>
                                <li><a class="dropdown-item" href="#">Item</a></li>
                                <li><a class="dropdown-item" href="#">Item</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" onclick="toggleDropdown(event)">Relatórios</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="listar-grupo.php">Grupo</a></li>
                                <li><a class="dropdown-item" href="listar-produtos.php">Estoque</a></li>
                                <li><a class="dropdown-item" href="#">Item</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

</body>

</html>