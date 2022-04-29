<?php require_once "../header/header.php" ?>
<?php include_once "../php_back/mdf_user_back.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title>Compte</title>
</head>

<main class="main_compte_pu">
    <div class="container_compte_pu">
        <div class="cote_right_compte_pu">

            <a class="navigationitemp" href="/users/modif_user.php?id_users=<?php echo $resultSql['id_users'] ?>">Modifier l'utilisateur<span></span></a>

            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">
            <h5 class="h2_supp">Vous êtes sur de vouloir supprimer l'utilisateur ?</h2>
                <p class="oui_non">Si "oui" appuyer sur le bouton delete</p>

                <div class="buttonform">
                    <form method="POST" action="">
                        <button class="submit_compte_maj" type="submit" name="delete_users"><span>Delete</span></button>
                </div>
                </form>

        </div>
    </div>
</main>

</html>