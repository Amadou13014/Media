<?php include_once "../header/header.php" ?>
<?php require_once "../php_back/admin_back.php" ?>





<h2 class="Administrateur">Administrateur</h2>
<div class="admin_submit">
    <a href="/admin/espace_admin.php" class="submit_cree">Crée un utilisateur</a>
    <a href="/article/article.php" class="submit_ajoute">Ajouter un article</a>
</div>

<div class="info_users">
    <?php foreach ($adm as $admin) : ?>


        <ul>
            <li> Pseudo :  <?php echo $admin['pseudo'] ?></li>
            <li> Nom :   <?php echo $admin['nom'] ?></li>
            <li> Prenom : <?php echo $admin['prenom'] ?></li>
            <li> Email :   <?php echo $admin['email'] ?></li>
            <li> Grade :   <?php echo $admin['role'] ?></li>
            <a href="/users/modif_user.php?id_users=<?php echo $admin['id_users'] ?>" class="submit_emp">Apporter des modification</a>
        </ul>

    <?php endforeach ?>
</div>