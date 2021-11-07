<?php
session_start();

if($_SESSION['username']){
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `projets` WHERE `idprojet`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query ->execute();
        $result = $query->fetch();
        /* var_dump($result); */
        echo'ça marche <br>';
    }else{
        echo'id manquante';
    }
}else{
    echo'identifiez-vous';
}
?>

<?php include('./header_admin.php')?>

<a href="projet.php"><button>Retour</button></a><br>
<a href="projet_edit.php?id=<?=$result['idprojet']?>">Modifier le Projet <?=$result['projet_titre']?></a><br>
<a href="projet_delete.php?id=<?=$result['idprojet']?>">Supprimer <?=$result['projet_titre']?></a><br>
<img src="./assets_admin/admin_logo/<?= $result['projet_logo'] ?>" class='projets_details--logo'>
<?=$result['projet_titre']?> <br>
<img src="./assets_admin/admin_img/<?= $result['projet_image'] ?>" class='projets_details--image'><br>
<?=$result['projet_contexte']?> <br>
<?=$result['projet_date_debut']?> <br>
<?=$result['projet_date_fin']?> <br>
<?=$result['projet_specs']?> <br>
<?=$result['projet_type']?> <br>
<?=$result['projet_github']?> <br>
<?=$result['projet_link']?> <br>



<?php include('./footer_admin.php')?>