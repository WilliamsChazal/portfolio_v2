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

<a href="socials_delete.php?id=<?=$result['idsocials']?>">Supprimer <?=$result['socials_titre']?></a><br>
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




</body>
</html>