<?php
session_start();


if($_SESSION['username']){
    require_once('db-connect.php');
    $_sql = 'SELECT * FROM `designs`';
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

<a href="add_design.php"><button>Ajouter un design</button></a>
<br><a href="home.php"><button>Retour</button></a>

<?php
    foreach ($result as $design) {
?>
 <a href="design_detail.php?id=<?=$design['iddesign']?>"><?=$design['design_titre']?></a><br>
 <img src="assets_admin/admin_design/<?= $design['design_file'] ?>"><br>
 
<?php
    }
?>



</body>
</html>