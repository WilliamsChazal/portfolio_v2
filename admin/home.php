<?php
session_start();


?>
<?php include('./header_admin.php')?>

<div class="container-fluid">
  <div class="row align-items-start">
        <div class="col-2 position-sticky">
        <?php include('./navbar_admin.php')?>
        </div>

         <div class="col ">
            <div class="row">BONJOUR SUR VOTRE BACK OFFICE <strong><?php echo $_SESSION['username'];?></strong> </div>
            <div class="row">BONJOUR SUR VOTRE BACK OFFICE <strong><?php echo $_SESSION['username'];?></strong> </div>
            <div class="row">BONJOUR SUR VOTRE BACK OFFICE <strong><?php echo $_SESSION['username'];?></strong> </div>
         </div>

        </div>

        <div class="col">
            One of three columns
        </div>
    </div>
</div>
   

<?php include('./footer_admin.php')?>



