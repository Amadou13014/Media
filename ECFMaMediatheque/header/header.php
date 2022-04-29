<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f00c55aea5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<header>
    <?php if (!isset($_SESSION['id_user'])) {

        session_start();
    }
    ?>
    <nav>

        <a href="../index.php"><img src="/image/imagess.jpg" class="logo"></a>

        <div class="identification">

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>

                <p class="insc"><a href="../admin/page_admin.php">Admin</a></p>
                <p class="insc"><a href="../php_back/deconnexion.php">Deconnexion</a></p>
                <p class="insc"><a href="../php/historique.php">Les Emprunt</a></p>

            <?php elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'user') : ?>
                <p class="insc"><a href="../admin/create_users.php">Mon compte</a></p>
                <p class="insc"><a href="../php_back/deconnexion.php">Deconnexion</a></p>
                <p class="insc"><a href="../php/historique.php">Mon Historique</a></p>
                <p class="connexion"><a href="../php/mesEmprunt.php">Mes emprunt</a></p>
            <?php elseif (!isset($_SESSION['role'])) : ?>
                <p class="insc"><a href="/php/inscription.php"> Inscription</a></p>
                <p class="connexion"><a href="/php/connexion.php">Connexion</a></p>
            <?php endif; ?>

        </div>
    </nav>

</header>