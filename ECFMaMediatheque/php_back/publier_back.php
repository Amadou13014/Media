<?php require_once "config.php" ?>
<?php
if (!isset($_SESSION['id_user'])) {

    session_start();
}

if (isset($_REQUEST['submitMsg17'])) {
    $titre = $_POST['titre'];
    $contenue = $_POST['contenue'];
    $type = $_POST['typeN'];
    $target_dir = "/var/www/html/ECFMaMediatheque/image/";
    $target_file = $target_dir . $_FILES["upload"]["name"];
    $image = 'image/' . $_FILES['upload']['name'];

    if (move_uploaded_file($_FILES['upload']['tmp_name'], $target_file)) {

        $stmt1 = $db->prepare("INSERT INTO post (title, content, date, id_user, id_type, img)
                                        VALUES (:title, :content, now(), :id_user, :id_type, :img)");
        $stmt1->bindParam(':title', $titre, PDO::PARAM_STR);
        $stmt1->bindParam(':content', $contenue, PDO::PARAM_STR);
        $stmt1->bindParam(':id_user',  $_SESSION['id_user'], PDO::PARAM_INT);
        $stmt1->bindParam(':id_type', $type);
        $stmt1->bindParam(':img', $name, PDO::PARAM_STR);
        $stmt1->execute();

        if ($stmt1) {
            header('Location: ../index.php');
        } else {
            echo "no";
        }
    } else {
        echo ('an error occured');
    }
}
