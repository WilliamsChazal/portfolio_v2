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
    <div>
        <?php echo $_SESSION['success'];?>
    </div>
    <div>Bonjour <?php echo $_SESSION['username'];?> </div>
<div class="admin_projet">
    <a href="projet.php"><button>Voir les projets</button></a><br>
    <a href="skills.php"><button>Voir les compétences</button></a><br>
    <a href="add_projet.php"><button>Ajouter un Design</button></a><br>
    <br>
    <br>
    <a href="register.php"><button>Créer un compte</button></a><br>

</div>
<br>
<button> <a href="end-session.php">Déconnexion</button></a>
   
</body>
</html>