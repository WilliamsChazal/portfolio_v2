<?php
session_start();

if($_SESSION['username']){
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `designs` WHERE `iddesign`=:id';
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
<a href="design.php"><button>Retour</button></a><br>
<a href="design_edit.php?id=<?=$result['iddesign']?>">Modifier le design <?=$result['design_titre']?></a><br>
<a href="design_delete.php?id=<?=$result['iddesign']?>">Supprimer <?=$result['design_titre']?></a><br>

<?=$result['design_titre']?> <br>

<?=$result['design_texte']?> <br>
<img src="./assets_admin/admin_design/<?= $result['design_file'] ?>" class='skills_details--logo'>





</body>
</html>