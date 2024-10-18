<?php require_once("verificaAutenticacao.php"); ?>
<?php
session_start();
require_once ("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //2. Pegar os dados para inserir no BD
    $nome = $_POST['nome'];
    $obs = $_POST['obs'];


    //3. Prepara a SQL
    $sql = "INSERT INTO grupo (nome , obs)values('$nome','$obs')";
    $resultado = mysqli_query($conn, $sql);

    $mensagem = "Grupo cadastrado com sucesso!";
    header('Location: cadastro-grupo.php');
    //4. Executar a SQL
    /*
    if($resultado){
        header('Location: index.php');
        $mensagem = "Grupo cadastrado com sucesso!";
    }*/
    
}
?>