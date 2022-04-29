<?php require_once "config.php"; ?>


<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['submit_maj_1'])) {


    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $param_passwords = password_hash($password, PASSWORD_DEFAULT);

    $update1 = $db->prepare("UPDATE users SET pseudo= :pseudo, nom= :nom, prenom= :prenom, email= :email, password= :password WHERE id_users= :id_user");
    $update1->bindParam(':id_user', $_SESSION["id_users"]);
    $update1->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $update1->bindParam(':nom', $nom, PDO::PARAM_STR);
    $update1->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $update1->bindParam(':email', $email, PDO::PARAM_STR);
    $update1->bindParam(':password', $param_passwords, PDO::PARAM_STR);
    $update1->execute();




    if ($update1) {
        echo "<script>alert(\"Vos informations ont bien été modifier\")</script>";
    } else {
        echo "<script>alert(\"Erreur veuillez rééssayer\")</script>";
    }
}
