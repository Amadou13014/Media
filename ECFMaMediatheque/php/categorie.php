<?php include_once "../header/header.php" ?>
<?php require_once "../php_back/cate_back.php" ?>
<?php require_once "../php_back/index_back.php" ?>


<!DOCTYPE html>
<html lang="en">


<body class="body_index">
    <div class="filtre">

        <h3>Categorie</h3>

    </div>

    <hr class="trait_hr">
    <div class="body_color">

        <div class="container_acceuil">
            <div class="nouveaute_attendu">
                <div class="barre_nouveaute_a">
                    <h3>Romance</h3>
                </div>
                <div class="globale">

                    <?php foreach ($sql1 as $article) : ?>

                        <div class="card_globale">
                            <div class="card">
                                <div class="card_header">
                                    <img src="<?php echo $article['image'] ?>" alt="img_card">
                                </div>
                                <div class="card_body">
                                    <span class="tag tag_steal"><?php echo $article['id_categorie'] ?></span>
                                    <h4><?php echo $article['titre'] ?></h4>
                                    <p> <?php echo $article['contenue'] ?></p>
                                </div>
                                <small><?php echo $article['date_publi'] ?></small>
                                <div class="submit_emp1">
                                    <a href="/php/emprunt.php?id_article=<?php echo $article['id_article'] ?> class=" submit_emp">Je veux emprunter</a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>
            </div>

        </div>
    </div>
</body>

</html>