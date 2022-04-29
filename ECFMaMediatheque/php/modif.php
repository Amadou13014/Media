<?php require_once "../header/header.php" ?>
<?php require_once "../php_back/index_back.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<main class="main_compte_pu">
    <div class="container_compte_pu">
        <div class="cote_right_compte_pu">
            <a class="navigationitemp" href="publier.php">Publier un post<span></span></a>
            <a class="navigationitemp" href="modif.php">Modifier un post<span></span></a>
            <a class="navigationitemp" href="supp_post.php">Supprimer un poste<span></span></a>
            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">
            <div class="globale_acceuil">
                <?php foreach ($sql1 as $modif) :
                ?>
                    <div class="container_acceuil ">
                        <div class="card">
                            <div class="card__header">
                                <?php if ($modif['id_article'] == 1) : ?>
                                    <img src="<?php echo $modif['image'] ?> " class="img_size">
                                <?php else : ?>
                                    <video width="400" height="100%" controls>
                                        <source src="<?= $modif['image']; ?>" type="video/mp4">
                                    </video>
                                <?php endif; ?>
                            </div>
                            <div class="card__body">
                                <span class="tag tag-blue"><?php echo $modif['type'] ?></span>
                                <h4><?php echo $modif['titre'] ?></h4>
                                <p><?php echo $modif['contenue'] ?></p>
                            </div>
                            <div class="card__footer">
                                <form action="phpback/suppback.php" method="POST">
                                    <input hidden name="id" value="<?php echo $modif['id_article'] ?>">
                                    <?php echo $modif['id_article'] ?>
                                    <input name="btnDelete" type="submit" class="btnDelete" value="Supprimer">
                                </form>
                            </div>
                        </div>

                    </div>
                <?php endforeach ?>
            </div>
        </div>
</main>

</html>