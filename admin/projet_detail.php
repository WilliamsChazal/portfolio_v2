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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<?=$result['projet_github']?> <br>
<?=$result['projet_link']?> <br>




</body>
</html>