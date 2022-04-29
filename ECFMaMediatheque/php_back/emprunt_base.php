<?php require_once "config.php";


if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['emprunt_bases'])) {

  $id_article = $_POST['id_article'];
  

  $emprt = $db->prepare("INSERT INTO emprunt (id_article, id_users, date_emprunt, dispo)
                          VALUES (:id_article, :id_users, now(), 0)");
  $emprt->bindParam(':id_article', $id_article, PDO::PARAM_INT);
  $emprt->bindParam(':id_users', $_SESSION['id_users'],PDO::PARAM_INT);
  $emprt->execute();
  $eroor = $emprt->errorInfo();

  if ($emprt) {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Vous avez bien emprunté le livre');
      window.location.href='../php/mesEmprunt.php';
      </script>");
  } else {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Erreur veuillez recommencé');
      window.location.href='../emprunt.php';
      </script>");
  }
}
