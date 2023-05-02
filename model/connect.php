<?php
require_once 'config.php';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8"; 
try {
    $pdo = new PDO($dsn, $user, $password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    if ($pdo) {
        return $pdo; 
    }
} catch (PDOException $e) {
    echo $e->getMessage(); 
}
?>