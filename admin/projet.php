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
 <a href="projects-details.php?id=<?=$projet['idprojets']?>"><?=$projet['projet_titre']?></a>
<?php
    }
?>

<a href="home.php"><button>Retour</button></a>

</body>
</html>