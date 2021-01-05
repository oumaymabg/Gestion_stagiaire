<?php
$dsn = 'mysql:dbname=gestion_stage;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $db= new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>