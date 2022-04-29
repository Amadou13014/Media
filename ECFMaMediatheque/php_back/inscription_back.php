<?php require_once "config.php" ?>

<?php

if (isset($_POST['submit_insc'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $pseudo = $_POST['pseudo'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $param_password = password_hash($password, PASSWORD_DEFAULT);

  $rqt = $db->prepare("INSERT INTO users (pseudo, nom, prenom, email, password, role)
                      VALUES (:pseudo, :nom, :prenom, :email, :password, 'user')");
  $rqt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
  $rqt->bindParam(':nom', $nom, PDO::PARAM_STR);
  $rqt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
  $rqt->bindParam(':email', $email, PDO::PARAM_STR);
  $rqt->bindParam(':password', $param_password, PDO::PARAM_STR);
  $rqt->execute();


  if ($rqt) {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Bienvenue vous êtes inscrit !');
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
