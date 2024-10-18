<?php require_once("verificaAutenticacao.php"); ?>
<?php
session_start();
require_once ("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //2. Pegar os dados para inserir no BD
    $nome = $_POST['nome'];
    $obs = $_POST['obs'];

    //3. Prepara a SQL
    $sql = "INSERT INTO marca(nome , obs)values('$nome','$obs')";
    /*$resultado = mysqli_query($conn, $sql);*/
    mysqli_query($conn, $sql);

    header('Location: cadastro-marca.php');

    //5. Mostrar mensagem ao usuario
    $mensagem = "Marca cadastrado com sucesso!";
}
?>