<?php require_once("verificaAutenticacao.php"); ?>
<?php
session_start();
require_once ("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $mensagem = "Usuario cadastrado com sucesso!";
    
    if ($senha1 === $senha2) {

        $sql = "INSERT INTO usuario(nome, email, senha) values('$nome', '$email', '$senha1')";

        mysqli_query($conn, $sql);

        
        header('Location: cadastro-usuario.php');

    } else {

        echo "senha incompátivel";

    }


    mysqli_close($conn);
}

?>