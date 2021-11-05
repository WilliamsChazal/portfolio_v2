<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>the office</title>
</head>
<body>

<div class="container vh-100 d-flex justify-content-center align-items-center">

    
        <div class="card" style="width: 24rem;">
            <img src="assets_admin/office-3.svg" class="card-img-top wc-image-cover" alt="...">
                 <div class="card-body">
                     <form method="post" action="login_handler.php">
                        <div class="mb-3">
                            <label for="input_username" class="form-label">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="input_username" name="data_username">
                        </div>
                        <div class="mb-4">
                            <label for="input_password" class="form-label">Mot de Passe</label>
                            <input type="password" class="form-control" id="input_password" name="data_password">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-outline-primary">Se Connecter</button>
                        </div>
                        <div class="d-grid gap-2">
                          
                        </div>
                    </form>
                    <?php 
                            if(!empty($_SESSION['success'])){
                                echo '<div class="alert alert-success" role="alert">'. $_SESSION['success'].'</div>';
                            }    $_SESSION['success']='';                    
                         ?>
                   <!--  <div class="d-flex justify-content-end mt-3"><a href="form_user-register.php">S'inscrire</a></div> -->
                   <a href="../index.php" target="_blank"><button type="submit" class="btn btn-outline-primary">Retour</button></a>  
</div>
    
    
    </div>


</div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>