<?php require_once "config.php" ?>


<?php

if (!isset($_SESSION)) {
  session_start();
}

$Uemprunt = $db->prepare("SELECT * FROM emprunt 
                          LEFT JOIN article ON emprunt.id_article = article.id_article 
                          WHERE emprunt.id_users = :id_users AND emprunt.dispo = 0");
$Uemprunt->bindParam(':id_users', $_SESSION['id_users'], PDO::PARAM_INT);
$Uemprunt->execute();
$emprunt_user = $Uemprunt->fetchAll();
