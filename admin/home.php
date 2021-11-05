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
    <link rel="stylesheet" href="./assets_admin/admin_styles/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../assets/img/logo-dark.png" type="image/x-icon">
    <title>Williams chazal</title>
</head>
<body>

<div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white home" style="width: 250px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="32"> </svg> <span class="fs-4">Bonjour <?php echo $_SESSION['username'];?></span> </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="#" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Accueil</span> </a> </li>
        <li> <a href="projet.php" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Projets</span> </a> </li>
        <li> <a href="design.php" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">Designs</span> </a> </li>
        <li> <a href="skills.php" class="nav-link text-white"> <i class="fa fa-cog"></i><span class="ms-2">Compétences</span> </a> </li>
    </ul>
    <hr>
    <div class="dropdown"> <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="../assets/img/photo-1.png" alt="" width="32" height="32" class="rounded-circle me-2"> <strong> <?php echo $_SESSION['username'];?> </strong> </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="register.php">Créer un compte</a></li>
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="end-session.php">Déconnexion</a></li>
        </ul>
    </div>
</div>
   


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


