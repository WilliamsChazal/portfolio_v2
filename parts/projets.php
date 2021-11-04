<?php
    /* if(isset($_GET['id']) &&!empty($_GET['id'])) { */
        require_once('../admin/db-connect.php');
        /* $id = strip_tags($_GET['id']); */
        /* $sql ='SELECT*FROM `projets` WHERE `idprojet`=:id'; */
        $sql ='SELECT*FROM `projets`';
        $query = $db->prepare($sql);
      /*   $query->bindValue(':id', $id, PDO::PARAM_STR); */
        $query ->execute();
        $result = $query->fetchAll();
        /* var_dump($result); */
    /* }else{
        echo'id manquante';
    } */
?>

<section class='modal_projets' id='mydiv'>

  <?php include('../includes/libs/task_bar.php')?>

       
    <div class='modal_projets--content'>
    <?php
                foreach ($result as $projet) {
            ?>
        <span class='hover' id='openDetails' onclick='openProjectDetails(<?=$projet["idprojet"]?>)'>
        <img src="../admin/assets_admin/admin_logo/<?=$projet['projet_logo']?>" alt="" alt="" srcset="">
            <p><?=$projet['projet_titre']?></p>
        </span>
      <?php
                }
      ?>
    </div>
</section>

<?php include('../parts/details.php')?>