<?php
session_start();

if($_SESSION['username']){
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `skills` WHERE `idskills`=:id';
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
<a href="skills.php"><button>Retour</button></a><br>
<a href="skills_edit.php?id=<?=$result['idskills']?>">Modifier la compétence <?=$result['skills_titre']?></a><br>
<a href="skills_delete.php?id=<?=$result['idskills']?>">Supprimer <?=$result['skills_titre']?></a><br>
<img src="./assets_admin/admin_logo/<?= $result['skills_logo'] ?>" class='skills_details--logo'>
<?=$result['skills_titre']?> <br>

<?=$result['skills_texte']?> <br>





</body>
</html>