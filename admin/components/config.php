<?php 
try {
    $pdo = new PDO('mysql: host=localhost; dbname=medilab', 'root', '');
} catch(PDOException $e){
    echo 'Erro ao conectar ao banco '.$e->getMessage();
}