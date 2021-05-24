<?php
include 'config.php';
if(isset($_POST['nome']) && !empty($_POST['nome']) ){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    try {
        $inserindo = 
        "INSERT INTO contato
         SET nome = '$nome', email = '$email', assunto = '$assunto' ,mensagem = '$mensagem' ";
         $pdo->query($inserindo);
         echo 'Consulta marcada com sucesso';
         echo '</br><a href="index.php">Home</a>';
    } catch (PDOException $erro) {
        echo "Erro ao marcar consulta ".$erro->getMessage();
    }

}

?>
