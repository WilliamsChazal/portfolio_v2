<?php
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('../admin/db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `projets` WHERE `idprojet`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query ->execute();
        $result = $query->fetch();
        /* var_dump($result); */
    }else{
        echo'id manquante';
    }
?>

<section class='modal_projets' id='mydiv'>

  <?php include('../includes/libs/task_bar.php')?>

       
    <div class='modal_projets--content'>
   <?php
                foreach ($result as $projet) {
            ?>
        <span class='hover' id='openDetails'>
        <img src="assets/images/admin_logo/<?=$result['projet_logo']?>" alt="" alt="" srcset="">
            <p><?=$projet['projet_titre']?></p>
        </span>
        <?php
                    }
                ?>
        <span>
            <img src="../assets/icons/ico-bomb.svg" alt="" srcset="">
            <p>Titre du Projet</p>
        </span>
        <span>
            <img src="../assets/icons/ico-jeux.svg" alt="" srcset="">
            <p>Titre du Projet</p>
        </span>
        <span>
            <img src="../assets/icons/logo-owl-post.svg" alt="" srcset="">
            <p>Titre du Projet</p>
        </span>
        <span>
            <img src="../assets/icons/logo-owl-post.svg" alt="" srcset="">
            <p>Titre du Projet</p>
        </span>
        <span>
            <img src="../assets/icons/logo-owl-post.svg" alt="" srcset="">
            <p>Titre du Projet</p>
        </span>
        <span>
            <img src="../assets/icons/logo-owl-post.svg" alt="" srcset="">
            <p>Titre du Projet</p>
        </span>
        <span>
            <img src="../assets/icons/logo-owl-post.svg" alt="" srcset="">
            <p>Titre du Projet</p>
        </span>
    </div>
</section>

<?php include('../parts/details.php')?>