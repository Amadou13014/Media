<?php require_once "config.php" ?>

<?php


$allemprunt = $db->prepare("SELECT * FROM emprunt
LEFT JOIN article ON emprunt.id_article = article.id_article 
                            WHERE  emprunt.dispo = 0 ");
$allemprunt->execute();



