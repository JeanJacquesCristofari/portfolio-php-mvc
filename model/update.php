<?php
require_once 'connect.php';

$id = $_POST['id'];
$texte = $_POST['texte'];


$sql = "UPDATE texte SET text=:text WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['text' => $texte, 'id' => $id]);

header("Location: ".$_SERVER['HTTP_REFERER']);
exit();
?>
