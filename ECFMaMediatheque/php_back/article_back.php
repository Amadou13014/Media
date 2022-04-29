<?php require_once "config.php" ?>
<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_REQUEST['submitMsg17'])) {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $editeur = $_POST['editeur'];
    $contenue = $_POST['contenue'];
    $categorie = $_POST['categorie'];
    $collection = $_POST['collection'];

    $type = $_POST['type'];
    $dir = $_SERVER['DOCUMENT_ROOT'] . '/image/';
    $pic_path = $dir . basename($_FILES['upload']['name']);
    $image = '/image/' . $_FILES['upload']['name'];

    if (move_uploaded_file($_FILES['upload']['tmp_name'], $pic_path)) {

        $stmt1 = $db->prepare("INSERT INTO article (id_categorie, id_collection, id_editeur, titre, auteur, contenue, image, type, date_publi)
                                        VALUES (:id_categorie, :id_collection, :id_editeur, :titre, :auteur, :contenue, :image,:type, now() )");
        $stmt1->bindParam(':id_categorie', $categorie, PDO::PARAM_INT);
        $stmt1->bindParam(':id_collection', $collection, PDO::PARAM_INT);
        $stmt1->bindParam(':id_editeur', $editeur, PDO::PARAM_INT);
        $stmt1->bindParam(':titre', $titre, PDO::PARAM_STR);
        $stmt1->bindParam(':auteur', $auteur, PDO::PARAM_STR);
        $stmt1->bindParam(':contenue', $contenue, PDO::PARAM_STR);
        $stmt1->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt1->bindParam(':type', $type, PDO::PARAM_STR);
        $stmt1->execute();
        $error = $stmt1->errorInfo();

        if ($stmt1) {
            header('Location: ../index.php');
        } else {
            echo "no";
        }
    } else {
        echo ('an error occured');
    }
}
