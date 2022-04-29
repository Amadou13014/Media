<?php require_once "config.php"; ?>


<?php


if (isset($_POST['submit_maj'])) {


    $id_users = $_GET['id_users'];
    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $param_passwords = password_hash($password, PASSWORD_DEFAULT);

    $update1 = $db->prepare("UPDATE users SET pseudo= :pseudo, nom= :nom, prenom= :prenom, email= :email, password= :password WHERE id_users= :id_user");
    $update1->bindParam(':id_user', $id_users);
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
if (isset($_POST['delete_users'])) {

    $id_users = $_GET['id_users'];
    $delete = $db->prepare("DELETE FROM users WHERE id_users= :id_user ");
    $delete->bindParam(':id_user', $id_users);
    $delete->execute();
  

    if ($delete) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Utilisateur supprimer');
        window.location.href='/admin/page_admin.php';
        </script>");
    } else {
        echo "<script>alert(\"Erreur veuillez rééssayer\")</script>";
        
    }
}


if (isset($_GET['id_users'])) {
    $id_users = $_GET['id_users'];
    $quesrySql = $db->prepare("SELECT * FROM users WHERE id_users= :id_user");
    $quesrySql->bindParam(':id_user', $id_users);
    $quesrySql->execute();
    $resultSql = $quesrySql->fetch();
}




?>
