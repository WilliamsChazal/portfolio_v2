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

<?php include('./header_admin.php')?>

<div class="container-fluid">
<?php include('./navbar_admin.php')?>  

<div class="col">

    <div class="col">
        <div class="container-fluid--projet ">
            <div class="col--projet">
            <?php
    foreach ($result as $projet) {
?>
            <div class="card" style="width: 18rem;">

                 <img src="assets_admin/admin_logo/<?= $projet['projet_logo'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$projet['projet_titre']?></h5>
                    <p class="card-text"><?=$projet['projet_contexte']?></p>
                    <a href="projet_detail.php?id=<?=$projet['idprojet']?>" class="btn btn-primary"><?=$projet['projet_titre']?></a>
                </div>
                </div>
                <?php
    }
?>
            </div>
           <!--  <div class="col">test</div> -->
        </div>
    </div>

</div>

<?php include('./footer_admin.php')?>