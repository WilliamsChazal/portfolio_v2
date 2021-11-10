<div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white home position-sticky" style="width: 250px;"> <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="32"> </svg> <span class="fs-4 mt-3">Bonjour <?php echo $_SESSION['username'];?></span> </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="home.php" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Accueil</span> </a> </li>
        <!-- <li> <a href="projet.php" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Projets</span> </a> </li> -->

        <div class="dropdown"> <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle nav-link " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">  <i class="fa fa-dashboard"></i><span class="ms-2">Projets</span></a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="projet.php">Voir les projets</a></li>
            <li><a class="dropdown-item" href="add_projet.php">Ajouter un projet</a></li>
        </ul>
    </div>


        <li> <a href="design.php" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">Designs</span> </a> </li>
        <li> <a href="skills.php" class="nav-link text-white"> <i class="fa fa-cog"></i><span class="ms-2">Compétences</span> </a> </li>
        <li> <a href="socials/socials.php" class="nav-link text-white"> <i class="fa fa-eye" aria-hidden="true"></i><span class="ms-2">Socials</span> </a> </li>
    </ul>
    <hr>
    
    <div class="dropdown"> <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="../assets/img/photo-1.png" alt="" width="32" height="32" class="rounded-circle me-2"> <strong> <?php echo $_SESSION['username'];?> </strong> </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="register.php">Créer un compte</a></li>
            <li><a class="dropdown-item" href="#">Profil</a></li>
            
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="end-session.php">Déconnexion</a></li>
        </ul>
    </div>
</div>