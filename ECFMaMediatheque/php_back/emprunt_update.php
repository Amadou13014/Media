<?php require_once "config.php"; ?>
<?php



if (isset($_POST['emprunt_bases_1'])) {
    $id_emprunt = $_POST["id_emprunt"];
    $emprt1 = $db->prepare("UPDATE emprunt SET dispo = 1, date_pris =now() WHERE id_emprunt = :id_emprunt");
    $emprt1->bindParam(':id_emprunt', $id_emprunt, PDO::PARAM_INT);
    $emprt1->execute();
    if($emprt1){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Merci d'avoir rendu le livre');
        </script>");  
    }     
   
}
