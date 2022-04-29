<?php include_once "../header/header.php" ?>
<?php include_once "../php_back/inscription_back.php" ?>

<body class="body_inscription">

    <div class="container_color_inscription">

        <div class="color_inscription">
            <form action="../php_back/inscription_back.php" method="post">
                <div class="container_inscription">
                    <div class="color_carre_inscription">
                        <div class="title_inscription_co">Bienvenue</div>
                        <div class="title2_inscription_co">Veuillez vous crée votre compte</div>

                        <div class="input_container_inscription_co ic2">
                            <input name="nom" class="input_inscription_co" type="text" placeholder=" Nom" />

                        </div>

                        <div class="input_container_inscription_co ic2">
                            <input name="prenom" class="input_inscription_co" type="text" placeholder="Prenom" />

                        </div>
                        <div class="input_container_inscription_co ic2">
                            <input name="pseudo" class="input_inscription_co" type="text" placeholder="Pseudo" />

                        </div>

                        <div class="input_container_inscription_co ic2">
                            <input name="email" class="input_inscription_co" type="email" placeholder="Email" />
                        </div>

                        <div class="input_container_inscription_co ic2">
                            <input name="password" class="input_inscription_co" type="password" placeholder="Password" />
                            <div class="link_connexion"><a href="../conexion.php">Connexion</a></div>
                        </div>

                        <button type="submit" class="submit_inscription" name="submit_insc">Inscription</button>
                    </div>


                </div>
            </form>

        </div>
        <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    </div>
</body>