<?php require_once "config.php" ?>
<?php

if (isset($_POST['submitpass'])) {
    $password = $_POST['password'];
    $param_passwords = password_hash($password, PASSWORD_DEFAULT);
    if ($_POST['password'] === $_POST['password_verif']) {
        $update1 = $db->prepare("UPDATE users SET password= :password WHERE id_user= :id_user");
        $update1->bindParam(':id_user', $_SESSION["id_user"]);
        $update1->bindParam(':password', $param_passwords, PDO::PARAM_STR);
        $update1->execute();

        if ($update1) {
            echo "<script>alert(\"Vos informations ont bien été modifier\")</script>";
        } else {
            echo "<script>alert(\"Erreur veuillez rééssayer\")</script>";
        }
    }
}






?>