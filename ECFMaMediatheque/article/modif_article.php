<?php require_once "../header/header.php" ?>
<?php include_once "../php_back/modif_back_article.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
</head>

<main class="main_compte_pu">
    <div class="container_compte_pu">
        <div class="cote_right_compte_pu">
            <a class="navigationitemp" href="modif_user.php">Publier un article<span></span></a>
            <a class="navigationitemp" href="/users/espace_user.php?id_users=<?php echo $resultSql['id_users'] ?>">Modifier un article<span></span></a>
            <a class="navigationitemp" href="modif_user.php">Supprimer un article<span></span></a>
            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">

            <form method="post" action="" enctype="multipart/form-data">
                <div class="contact1">
                    <label for="titre ">Titre</label>
                    <input type="titre" name="titre" id="titrepu" class="inputclass_compte" required>

                    <label for="auteur ">Auteur</label>
                    <input type="text" name="auteur" id="auteur" class="inputclass_compte" required>

                    <label for="contenue">Contenu</label>
                    <textarea type="text" id="story" name="contenue" rows="8" cols="35" class="inputclass_compte" required></textarea>

                    <label for="upload ">Image</label>
                    <input type="file" name="upload">

                    <label for="categorie " class="inputclass_compte">Catégorie</label>
                    <select id="categorie" name="categorie" class="inputclass_compte">
                        <option value="1" selected>Anime</option>
                        <option value="2">Romance</option>
                        <option value="3">Action</option>
                        <option value="4">Enfant</option>
                        <option value="5">Horreur</option>
                    </select>

                    <label for="collection " class="inputclass_compte">Collection</label>
                    <select id="collection" name="collection" class="inputclass_compte">
                        <option value="1" selected>Shônen</option>
                        <option value="2">Collection R</option>
                        <option value="3">Folio Junior</option>
                        <option value="4">New romance</option>
                        <option value="5">Histoires Du Soir</option>
                    </select>
                    <label for="editeur " class="inputclass_compte">Editeur</label>
                    <select id="editeur" name="editeur" class="inputclass_compte">
                        <option value="1" selected>Hugo Poche</option>
                        <option value="2">Gallimard jeunesse</option>
                        <option value="3">Gallimard</option>
                        <option value="4">Glénat </option>
                    </select>
                    <label for="type" class="inputclass_compte">Type</label>
                    <select id="type" name="type" class="inputclass_compte">
                        <option value="1" selected>Livre</option>
                        <option value="2">Film</option>
                    </select>

                </div>
                <div class="buttonform">
                    <button class="submit_compte_maj" name="submitMsg12">Modifier</button>
                </div>
            </form>


        </div>
    </div>
</main>

</html>