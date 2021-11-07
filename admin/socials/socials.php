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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>


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





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>