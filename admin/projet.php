<?php
session_start();

if($_SESSION['username']){
    require_once('db-connect.php');
    $_sql = 'SELECT * FROM `projets`';
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

<?php
    foreach ($result as $projet) {
?>
 
 <img src="assets_admin/admin_logo/<?= $projet['projet_logo'] ?>"><br>
 <a href="projet_detail.php?id=<?=$projet['idprojet']?>"><?=$projet['projet_titre']?></a><br>
<?php
    }
?>
<a href="add_projet.php"><button>Ajouter un projet</button></a>
<br><a href="home.php"><button>Retour</button></a>

</body>
</html>