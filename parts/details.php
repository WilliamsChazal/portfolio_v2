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


<section class='modal_details' id='mondiv'>
<?php include('../includes/libs/task_bar-projet.php')?>

    <div class='modal_details--content' id="demo">
        <div class='icons'>
            <span><img src="assets/images/admin_logo/<?=$result['projet_logo']?>" alt="" srcset="">
                <a href="<?=$result['projet_link']?>" target="_blank"><p><?=$result['projet_titre']?></p></a>
            </span>
            <span ><img src="../assets/icons/github.svg" alt="" srcset="">
                <a href="<?=$result['projet_github']?>" target="_blank"> <p class='hover'>Github</p> </a>
            </span>
        </div>
        <div class='details-projets'>
            <span><img src="assets/images/admin_img/<?=$result['projet_image']?>" alt="" alt="" srcset=""></span>
            <span>
                <h3><?=$result['projet_titre']?></h3>
                <p><?=$result['projet_contexte']?></p>
                <p><?=$result['projet_specs']?></p>
    </span>
        </div>
    </div>
</section>