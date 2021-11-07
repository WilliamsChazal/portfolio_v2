<?php
session_start();


if($_SESSION['username']){
    require_once('../db-connect.php');
    $_sql = 'SELECT * FROM `socials`';
    $query = $db->prepare($_sql);
    $query ->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    /* var_dump($result); */

}

?>

<?php include('./../header_admin.php')?>


<a href="add_socials.php"><button type="button" class="btn btn-info">Ajouter un réseau social</button></a>
<a href="../home.php"><button type="button" class="btn btn-primary">Retour</button></a>
<?php
    foreach ($result as $socials) {
?>
<a href="socials_detail.php"><?=$socials['socials_titre']?></a>
 <br>
 <img src="./../assets_admin/admin_logo/<?= $socials['socials_logo'] ?>"><br>
 <a href="<?=$socials['socials_link']?>" targe='_blank'><button type="button" class="btn btn-dark">Lien :<?=$socials['socials_titre']?></button></a>
 <a href="socials_delete.php?id=<?=$socials['idsocials']?>"><button type="button" class="btn btn-danger">Supprimer <?=$socials['socials_titre']?></button></a><br>
 <iframe name="empty" id="empty" style="display: none;"></iframe>
<?php
    }
?>



<?php include('./../footer_admin.php')?>