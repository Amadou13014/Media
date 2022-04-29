<?php require_once "../header/header.php" ?>
<?php require_once "../php_back/emprunt_back.php" ?>
<?php require_once "../php_back/emprunt_base.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<main class="main_compte_pu">
    <h4 class="h4">Emprunter ce livre ?</h4>
    
        <?php foreach ($emprunt_user as $emprunts) : ?>
            <div class="card_globale_1">
                <div class="card">
                    <div class="card_header">
                        <img src="<?php echo $emprunts['image'] ?>" alt="img_card">
                    </div>
                    <div class="card_body">
                        <span class="tag tag_steal"><?php echo $emprunts['id_categorie'] ?></span>
                        <h4><?php echo $emprunts['titre'] ?></h4>
                        <p> <?php echo $emprunts['contenue'] ?></p>
                    </div>
                    <form action="#" method="post">
                        <input hidden name="id_article" value="<?php echo $emprunts['id_article'] ?>" />
                        <button type="submit" name="emprunt_bases" class="submit_emprunt">Emprunter</button>
                    </form>
                </div>
            
        <?php endforeach ?>


</main>

</html>