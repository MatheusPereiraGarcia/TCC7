<?php require_once("verificaAutenticacao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css" />
    <title>Document</title>
</head>
<body>
<header>
        <div class="menu">

            <?php require_once ("menu2.php"); ?>

        </div>
    </header>

    <?php if (isset($mensagem)) { ?>
            <div class="alert alert-success" role="alert">
                <?= $mensagem ?>
            </div>
    <?php } ?>

    <div class="container">

        <h1 class="titulo-1">Marca Cadastrar</h1>
        <form method="post" action="cadastrar-marca.php">
            <div class="label-input">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome" required> </div>
                <br><br>
                <div class="label-input">
                <label for="nome" class="form-label">Observações</label>
                <textarea id="w3review" class="form-control" name="obs" rows="5" cols="100"></textarea> </div>
                <br>

                        <button name="salvar" type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-check"></i> Salvar
                        </button>
        </form>
    </div>
</body>
</html>