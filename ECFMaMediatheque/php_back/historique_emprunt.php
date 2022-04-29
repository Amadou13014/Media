<?php require_once "config.php" ?>


<?php

if (!isset($_SESSION)) {
  session_start();
}
if (isset($_POST['submit_histo'])) {

  $id_article = $_POST['id_article'];


  $supp = $db->prepare("INSERT INTO emprunt (id_article, id_users, date_rendu)
                          VALUES (:id_article, :id_users, now())");
  $supp->bindParam(':id_article', $id_article, PDO::PARAM_INT);
  $supp->bindParam(':id_users', $_SESSION['id_users'], PDO::PARAM_INT);
  $supp->execute();

  if ($supp) {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Vous avez bien emprunté le livre');
      window.location.href='../index.php';
      </script>");
  } else {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Erreur veuillez recommencé');
      window.location.href='../index.php';
      </script>");
  }
}
?>