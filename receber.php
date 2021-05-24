<?php
include 'config.php';
if(isset($_POST['nome']) && !empty($_POST['nome']) ){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $exame = $_POST['exame'];
    $consulta = $_POST['consulta'];
    $mensagem = $_POST['mensagem'];

    try {
        $inserindo = 
        "INSERT INTO agendamentos
         SET nome = '$nome', email = '$email', telefone = '$telefone', exame = '$exame', consulta = '$consulta', mensagem = '$mensagem' ";
         $pdo->query($inserindo);
         echo 'Consulta marcada com sucesso';
         echo '</br><a href="index.php">Home</a>';
    } catch (PDOException $erro) {
        echo "Erro ao marcar consulta ".$erro->getMessage();
    }

}

?>
