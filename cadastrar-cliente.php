<?php require_once("verificaAutenticacao.php"); ?>
<?php
//1.Conectar no BD(IP, usuario, senha, nome do banco)
session_start();
require_once ("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //2. Pegar os dados para inserir no BD
    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $dtNasc = $_POST['dtNasc'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    




    //3. Prepara a SQL
    $sql = "INSERT INTO cliente(nome, fone, email, cpf, dtNasc, endereco, cep, cidade, uf, rua, numero) VALUES('$nome','$fone','$email','$cpf', '$dtNasc', '$endereco', '$cep', '$cidade', '$uf', '$rua', '$numero')";
    $resultado = mysqli_query($conn, $sql);

    $mensagem = "Cliente cadastrado com sucesso!";
    header('Location: cadastro-cliente.php');
}
?>
