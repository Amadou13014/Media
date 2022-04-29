<?php require_once "../header/header.php" ?>
<?php include_once "../php_back/modif_mesInfo.php" ?>
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
            <a class="navigationitemp" href="/admin/create_users.php">Modifier mes information<span></span></a>
         
         

            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">

            <form method="post" class="form_input">

                <div class="input_compte">
                    <label for="pseudo" class="pseudoclass"><span>Pseudo</span></label>
                    <input class="inputclass_compte " name="pseudo" type="text" placeholder="pseudo" value="<?php echo $_SESSION['pseudo']?>" required>
                </div>

                <div class="input_compte">
                    <label for="nom" class="pseudoclass"><span>Nom</span></label>
                    <input class="inputclass_compte " name="nom" type="text" placeholder="nom" value="<?php echo $_SESSION['nom']?>" required>
                </div>

                <div class="input_compte">
                    <label for="prenom" class="pseudoclass"><span>Prenom</span></label>
                    <input class="inputclass_compte " name="prenom" type="text" placeholder="prenom" value="<?php echo $_SESSION['prenom']?>" required> 
                </div>

                <div class="input_compte">
                    <label for="email" class="pseudoclass"><span>Email</span></label>
                    <input class="inputclass_compte " name="email" type="email" placeholder="email" value="<?php echo $_SESSION['email']?>" required>
                </div>
                <div class="input_compte">
                    <label for="password" class="pseudoclass"><span>Password</span></label>
                    <input name="password" class="inputclass_compte" type="password" placeholder="password" required>
                </div>
                <div class="buttonform">
                    <button class="submit_compte_maj" type="submit" name="submit_maj_1"><span>Modifier</span></button>
                </div>


            </form>

        </div>
    </div>
</main>

</html>