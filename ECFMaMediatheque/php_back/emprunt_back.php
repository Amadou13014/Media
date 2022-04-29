<?php require_once "config.php";


$id = $_GET['id_article'];

$sql = $db->prepare("SELECT * FROM article WHERE id_article = :id_article");
$sql->bindParam('id_article', $id);
$sql->execute();
$emprunt_user = $sql->fetchAll();
