<?php include_once "../header/header.php" ?>
<?php require_once "../php_back/allemprunt_back.php" ?>

<body class="body_index">
    <div class="filtre">
    </div>

    <hr class="trait_hr">
    <div class="body_color">

        <div class="container_acceuil">
            <div class="nouveaute_attendu">
                <div class="barre_nouveaute_a">
                    <h3>Historique des emprunt</h3>
                </div>
                <div class="globale">


                    <?php foreach ($allemprunt as $Uemprunts) : ?>
                        <div class="card_globale">
                            <div class="card">
                                <div class="card_header">
                                    <img src="<?php echo $Uemprunts['image'] ?>" alt="img_card">
                                </div>
                                <div class="card_body">
                                    <span class="tag tag_steal"><?php echo $Uemprunts['id_categorie'] ?></span>
                                    <h4><?php echo $Uemprunts['titre'] ?></h4>
                                    <p> <?php echo $Uemprunts['contenue'] ?></p>
                                </div>
                                <small><?php echo $Uemprunts['date_emprunt'] ?></small>

                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>