<?php
    /* if(isset($_GET['id']) &&!empty($_GET['id'])) { */
        require_once('../admin/db-connect.php');
        /* $id = strip_tags($_GET['id']); */
        /* $sql ='SELECT*FROM `projets` WHERE `idprojet`=:id'; */
        $sql ='SELECT*FROM `projets` ORDER BY RAND() LIMIT 1';
        $query = $db->prepare($sql);
      /*   $query->bindValue(':id', $id, PDO::PARAM_STR); */
        $query ->execute();
        $result = $query->fetchAll();
        /* var_dump($result); */
    /* }else{
        echo'id manquante';
    } */
?>


<section class="bottomNav">
<nav >
    <div class='hover' onclick='openModal("projets.php", "modal_projets" ,"Portfolio", 10)' >
        <img src="../assets/icons/dossier.svg" alt="" srcset="" >
        <p>Portfolio</p>

    </div>
    <div class='hover'  onclick='openModal("skills.php", "modal_skills" ,"Compétences", 10)'>
        <img src="../assets/icons/coding.svg" alt="" srcset="">
        <p>Compétences</p>
    </div>
    <div class='hover' onclick='openModal("designs.php", "modal_design" ,"Webdesigns", 10)'>
        <img src="../assets/icons/designer.png" alt="" srcset="">
        <p>Webdesign</p>
    </div>

    <div class='hover' onclick='openModal("form.php", "modal_contact" ,"Contactez moi", 10)'>
        <img src="../assets/icons/un-message.svg" alt="" srcset="">
        <p>Contact</p>
    </div>
    <div id='projet' class='hover'>
    <?php
                foreach ($result as $projet) {
            ?>
        <a href="<?=$projet['projet_link']?>" target='_blank'>
        <img src="../admin/assets_admin/admin_logo/<?=$projet['projet_logo']?>" alt="" srcset="">
        <p><?=$projet['projet_titre']?></p>
        </a>
        <?php
                }
      ?>
    </div>
    
</nav>
</section>
