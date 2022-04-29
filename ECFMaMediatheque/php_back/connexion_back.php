<?php require_once "config.php" ?>
<?php session_start(); ?>

<?php

if (isset($_POST['submit_co'])) {

    if ($_POST['pseudo'] != "" || $_POST['email'] != "" || isset($_POST['password'])) {
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $stmt = $db->prepare("SELECT * FROM users WHERE email= ? || pseudo= ?");
        $stmt->execute(array($email, $pseudo));
        $count = $stmt->rowCount();
        $user = $stmt->fetch();


        if ($count > 0) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['id_users'] = $user["id_users"];
                $_SESSION['email'] = $email;
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['prenom'] = $user["prenom"];
                $_SESSION['nom'] = $user["nom"];
                $_SESSION['role'] = $user["role"];


                echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Vous êtes connecté');
                 window.location.href='/index.php';
                 </script>");
            } else {
                echo "
     				<script>alert('Erreur dans les information saissis')</script>
     				<script>window.location = '../php/connexion.php'</script>
     				";
            }
        } else {
            echo "
            			<script>alert('Erreur veuillez recommencé')</script>
        				<script>window.location = '../php/connexion.php'</script>
            	";
        }
    }
}


?>



