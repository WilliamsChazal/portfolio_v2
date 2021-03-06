<?php
session_start();

if($_SESSION['username']){
            if($_POST){
                if(
                isset($_POST['idprojet']) &&!empty($_POST['idprojet'])&&
                isset($_FILES['projet_logo'])&&!empty($_FILES['projet_logo'])
            ){
            

            $id=strip_tags($_POST['idprojet']);
            $logo = $_FILES['projet_logo'];
            

// upload ficher //
            $target_dir = "../assets/images/admin_logo/";
            $target_file = $target_dir . basename($_FILES["projet_logo"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["projet_logo"]["tmp_name"]);
              if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
            }
            
            // Check if file already exists
            if (file_exists($target_file)) {
              echo "file already exists but it's all good bro.";
              // echo "Sorry, file already exists.";
              $uploadOk = 1;
            }
            
            // Check file size
            if ($_FILES["projet_logo"]["size"] > 500000000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["projet_logo"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["projet_logo"]["name"])). " has been uploaded.";
              } else {
                echo "Sorry, there was an error uploading your file.";
              }
            }
            
            
            require_once("db-connect.php");
            $sql ='UPDATE `projets` SET `projets_logo`=:projets_logo WHERE `idprojet`=:idprojet';


            $query = $db ->prepare($sql);

            $query->bindValue(':idprojet', $id, PDO::PARAM_INT);
            $query->bindValue(':projets_logo', $logo['name'], PDO::PARAM_STR);
            $query->execute();
            echo 'Sucess';


            // N??cessaire pour faire fonctionner le bouton retour
            $sql ='SELECT*FROM `projets` WHERE `idprojet`=:id';
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_STR);
            $query ->execute();
            $result = $query->fetch();

?>
        <a href="projects-details.php?id=<?= $result['idprojet']?>">
         <button>Retour</button> 
        </a>

        <?php
        }else{
            echo 'Remplissez tous les champs';echo '<br><a href=home.php> Retour </a>';}

    }else{
        echo 'l\'Url n\'est pas valide';
    }
}else{
    echo 'Vous n\'??tes pas identifiez';
}