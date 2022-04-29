<?php require_once "../header/header.php" ?>

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
            <a class="navigationitemp" href="supp_post.php">Supprimer un post<span></span></a>
            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">

            <div class="container1">
                <form method="post" action="phpback/publierback.php" enctype="multipart/form-data">
                    <div class="contact1">
                        <label for="titre ">Titre</label>
                        <input type="titre" name="titre" id="titrepu" class="inputclass_compte" required>

                        <label for="Auteur ">Auteur</label>
                        <input type="text" name="Auteur" id="Auteur" class="inputclass_compte" required>

                        <label for="Collection ">Collection</label>
                        <input type="text" name="Collection" id="Collection" class="inputclass_compte" required>

                        <label for="Editeur ">Editeur</label>
                        <input type="text" name="Editeur" id="Editeur" class="inputclass_compte" required>

                        <label for="text">Contenu</label>
                        <textarea type="text" id="story" name="contenue" rows="8" cols="35" class="inputclass_compte"></textarea>

                        <label for="upload ">Image</label>
                        <input type="file" name="upload">

                        <label for="titre " class="inputclass_compte">Catégorie</label>
                        <select id="type" name="typeN" class="inputclass_compte">
                            <option value="1" selected>Action</option>
                            <option value="2">Anime</option>
                            <option value="2">Romance</option>
                            <option value="2">Enfant</option>
                        </select>
                        <label for="titre " class="inputclass_compte">Type</label>
                        <select id="type" name="typeN" class="inputclass_compte">
                            <option value="1" selected>Livre</option>
                            <option value="2">Film</option>
                        </select>
                    </div>
                    <div class="buttonform">
                        <button class="submit_compte_maj" name="submitMsg17">Publier</button>
                    </div>
                </form>



            </div>

</main>

</html>