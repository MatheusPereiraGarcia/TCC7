<?php require_once("verificaAutenticacao.php"); ?>
<?php
session_start();
require_once("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $idMarca = $_POST['idMarca'];
    $idGrupo = $_POST['idGrupo'];
    $vlrCompra = $_POST['vlrCompra'];
    $vlrVenda = $_POST['vlrVenda'];
    $descricao = $_POST['descricao'];
    /*$senha2 = $_POST[''];*/

    $sql = "INSERT INTO produtos (nome, quantidade,idMarca, idGrupo, vlrCompra, vlrVenda, descricao ) VALUES ('$nome', '$quantidade', '$idMarca', '$idGrupo', '$vlrCompra', '$vlrVenda', '$descricao')";

    mysqli_query($conn, $sql);

    header('Location: cadastro-produtos.php');

    mysqli_close($conn);

}

?>