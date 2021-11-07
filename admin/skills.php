<?php
session_start();


if($_SESSION['username']){
    require_once('db-connect.php');
    $_sql = 'SELECT * FROM `skills`';
    $query = $db->prepare($_sql);
    $query ->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    /* var_dump($result); */

}

?>

<?php include('./header_admin.php')?>


<?php
    foreach ($result as $skills) {
?>
 
 <img src="assets_admin/admin_logo/<?= $skills['skills_logo'] ?>"><br>
 <a href="skills_detail.php?id=<?=$skills['idskills']?>"><?=$skills['skills_titre']?></a><br>
<?php
    }
?>


<a href="add_skills.php"><button>Ajouter une compétence</button></a>
<br><a href="home.php"><button>Retour</button></a>

<?php include('./footer_admin.php')?>