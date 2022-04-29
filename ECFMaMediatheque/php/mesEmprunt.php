<?php include_once "../header/header.php" ?>
<?php require_once "../php_back/empruntUser.php" ?>
<?php require_once "../php_back/emprunt_update.php" ?>

<body class="body_index">
    <div class="filtre">
    </div>

    <hr class="trait_hr">
    <div class="body_color">
        <div class="container_acceuil">
            <div class="nouveaute_attendu">
                <div class="barre_nouveaute_a">
                    <h3>Vos emprunt</h3>
                </div>
                <div class="globale">
                    <?php foreach ($emprunt_user as $Uemprunts) : ?>
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
        
                                <form action="#" method="post">
                                    
                                    <input hidden name="id_emprunt" value="<?php echo $Uemprunts['id_emprunt'] ?>" />
                                    <button type="submit" name="emprunt_bases_1" class="submit_histo">Rendre ce livre ?</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>