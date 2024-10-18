<?php require_once("verificaAutenticacao.php"); ?>
<?php

//1.Conectar no BD(IP, usuario, senha, nome do banco)
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'tcc');



if (isset($_POST['salvar'])) {
    //2. Pegar os dados para inserir no BD
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $obs = $_POST['obs'];

    //3. Prepara a SQL
    $sql = "UPDATE grupo SET nome = '$nome', obs = '$obs' WHERE id = '$id'";

    //4. Executar a SQL
    mysqli_query($conexao, $sql);


    //5. Mostrar mensagem ao usuario
    $mensagem = "Grupo Alterado com sucesso!";

    header('Location: listar-grupo.php');

}

$sql = "SELECT * FROM grupo WHERE id = " . $_GET['id'];
$resultado = mysqli_query($conexao, $sql);
$categoria = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <title>Alterar Categoria</title>
</head>

<body>

    <?php require_once("menu.php"); ?>


    <div class="container">
        <?php if (isset($mensagem)) { ?>
            <div class="alert alert-success" role="alert">
                <?= $mensagem ?>
            </div>
        <?php } ?>


        <h1 class="mt-2">Grupo Alterar</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?= $categoria['id'] ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome" required
                    value="<?php echo $categoria['nome'] ?>">
                <br>
                <label for="nome" class="form-label">Observações</label>
                <input name="obs" type="text" class="form-control" id="nome" required
                    value="<?php echo $categoria['obs'] ?>">
            </div>

            <br>
            <button name="salvar" type="submit" class="btn btn-primary">
                <i class="fa-solid fa-check"></i> Salvar
            </button>
            <a type="button" href="grupo-listar.php" class="btn btn-warning">Voltar</a>
        </form>
    </div>


</body>

</html>