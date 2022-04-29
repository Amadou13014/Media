<?php require_once "config.php";


if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['submitMsg12'])) {

  $id_article = $_GET['id_article'];
  $titre = $_POST['titre'];
  $auteur = $_POST['auteur'];
  $contenue = $_POST['contenue'];
  $target_dir = "/var/www/html/ECFMaMediatheque/image/";
  $target_file = $target_dir . $_FILES["upload"]["name"];
  $image = 'image/' . $_FILES['upload']['name'];
  $id_categorie = $_POST['categorie'];
  $collection = $_POST['collection'];
  $id_editeur = $_POST['editeur'];
  $type = $_POST['type'];



  $modif = $db->prepare("UPDATE article SET id_categorie = :id_categorie, id_editeur = :id_editeur, titre = :titre, 
  auteur = :auteur, contenue= :contenue, image= :image, type= :type, date_maj = now() WHERE id_article= :id_article");
  $modif->bindParam(':id_categorie', $id_categorie, PDO::PARAM_INT);
  $modif->bindParam(':id_article', $id_article, PDO::PARAM_INT);
  $modif->bindParam(':id_editeur', $id_editeur, PDO::PARAM_INT);
  $modif->bindParam(':titre', $titre, PDO::PARAM_STR);
  $modif->bindParam(':auteur', $auteur, PDO::PARAM_STR);
  $modif->bindParam(':contenue', $contenue, PDO::PARAM_STR);
  $modif->bindParam(':image', $image, PDO::PARAM_STR);
  $modif->bindParam(':type', $type, PDO::PARAM_STR);
  $modif->execute();


  if ($modif) {
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
