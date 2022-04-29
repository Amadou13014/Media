<?php require_once "config.php";


if (isset($_POST['search_genre'])) {

    $idk = $_POST['gcategory'];

    $stmt1 = $db->prepare("SELECT * FROM article
                                LEFT JOIN categorie ON articles.id_categorie = categorie.id_categorie
                                WHERE articles.id_categorie = $idk");
    $stmt1->execute();

    $autheur = $stmt1->fetchAll();

    if($stmt1){
        echo ("<script LANGUAGE='JavaScript'>
      window.location.href='../php/categorie.php';
      </script>");
    }else{
        echo ("<script LANGUAGE='JavaScript'>
      window.location.href='../index.php';
      </script>");
    }
}
