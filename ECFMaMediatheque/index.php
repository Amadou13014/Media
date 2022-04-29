<?php include_once "header/header.php" ?>
<?php require_once "php_back/index_back.php" ?>
<?php require_once "php_back/cate_back.php" ?>


<!DOCTYPE html>

<html lang="en">
    <head>
    <link rel="stylesheet" href="style.css">
    </head>


<body class="body_index">
    <div class="filtre">
        <form action="" method="post">
            <select class="fCategory" name="gcategory">
                <option value="">Trier par Genre :</option>
                <option value="1">Romance</option>
                <option value="2">Horreur</option>
                <option value="3">Chill</option>
            </select>
            <button name="search_genre">Search Category</button>
        </form>
        <form action="" method="post">
            <select class="fCategory" name="aCategory">

                <option value="1">Trier par Auteur:</option>
                <option value="2">Oda</option>
                <option value="3">avenir</option>
                <option value="4">salut</option>
            </select>
            <button name="search_auteur">search Category</button>
        </form>
        <form action="" method="post">
            <select class="fCategory" name="cCategory">
                <option value="">Trier par collection:</option>
                <option value="1">Shônen</option>
                <option value="2">New Romance</option>
                <option value="3">Folio Junior</option>
                <option value="4">Collection R</option>
            </select>
            <button name="search_collection">search Category</button>
        </form>
        <form action="" method="post">
            <select class="fCategory" name="eCategory">
                <option value="">Trier par Editeur:</option>
                <option value="1">Hugo Poche</option>
                <option value="2">Gallimard jeunesse</option>
                <option value="3">Gallimard</option>
                <option value="4">Glénat </option>
            </select>
            <button name="search_editeur">search Category</button>
        </form>
        <?php



        ?>
    </div>

    <hr class="trait_hr">
    <div class="body_color">

        <div class="container_acceuil">
            <div class="nouveaute_attendu">
                <div class="barre_nouveaute_a">
                    <h3>Page d'acceuil</h3>
                </div>
                <div class="globale">

                    <?php foreach ($sql1 as $article) : ?>

                        <div class="card_globale">
                            <div class="card">
                                <div class="card_header">
                                    <img src="<?php echo $article['image'] ?>" alt="img_card">
                                </div>
                                <div class="card_body">
                                    <span class="tag tag_steal"><?php echo $article['type'] ?></span>
                                    <h4><?php echo $article['titre'] ?></h4>
                                    <p> <?php echo $article['contenue'] ?></p>
                                </div>
                                <small><?php echo $article['date_publi'] ?></small>

                                <div class="submit_emp1">
                          
                                        <a href="/php/emprunt.php?id_article=<?php echo $article['id_article'] ?>" class="submit_emp4">Je veux emprunter</a>
                                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
                                        <a href="/article/modif_article.php?id_article=<?php echo $article['id_article'] ?> " class="submit_emp5">Modifier</a>
                                    <?php endif; ?>
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