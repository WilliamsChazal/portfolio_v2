<?php
session_start();

if($_SESSION['username']){
            if($_POST){
                if(isset($_POST['projet_titre'])&&!empty($_POST['projet_titre'])&&
                isset($_POST['projet_debut'])&&!empty($_POST['projet_debut'])&&
                isset($_POST['projet_fin'])&&!empty($_POST['projet_fin'])&&
                isset($_POST['projet_context'])&&!empty($_POST['projet_context'])&&
                isset($_POST['projet_specs'])&&!empty($_POST['projet_specs'])&&
                isset($_POST['projet_githublink'])&&!empty($_POST['projet_githublink'])&&
                isset($_POST['projet_link'])&&!empty($_POST['projet_link'])&&
                isset($_POST['projet_type'])&&!empty($_POST['projet_type'])&&
                isset($_FILES['projet_image']) && !empty($_FILES['projet_image'])&&
                isset($_FILES['projet_logo']) && !empty($_FILES['projet_logo'])){
            
            require_once("db-connect.php");
            $id=strip_tags($_POST['idprojet']);
            $titre =strip_tags($_POST['projet_titre']);
            $begin =strip_tags($_POST['projet_debut']);
            $end =strip_tags($_POST['projet_fin']);
            $context =strip_tags($_POST['projet_context']);
            $specs =strip_tags($_POST['projet_specs']);
            $type =strip_tags($_POST['projet_type']);
            $githublink =strip_tags($_POST['projet_githublink']);
            $projetlink =strip_tags($_POST['projet_link']);
        
            $sql ='UPDATE `projets` SET `projets_title`=:projets_title, `projets_date_debut`=:projets_date_debut, `projets_date_fin`=:projets_date_fin, `projets_context`=:projets_context, `projets_specs`=:projets_specs, `projets_lien_github`=:projets_lien_github, `projets_lien_projet`=:projets_lien_projet WHERE `idprojets`=:idprojets';


            $query = $db ->prepare($sql);

            $query->bindValue(':projet_titre', $titre, PDO::PARAM_STR);
            $query->bindValue(':projet_date_debut', $begin, PDO::PARAM_STR);
            $query->bindValue(':projet_date_fin', $end, PDO::PARAM_STR);
            $query->bindValue(':projet_contexte', $context, PDO::PARAM_STR);
            $query->bindValue(':projet_specs', $specs, PDO::PARAM_STR);
            $query->bindValue(':projet_github', $githublink, PDO::PARAM_STR);
            $query->bindValue(':projet_link', $projetlink, PDO::PARAM_STR);
            $query->bindValue(':projet_type', $type, PDO::PARAM_STR);
            $query->bindValue(':projet_image', $picture, PDO::PARAM_STR);
            $query->bindValue(':projet_logo', $logo, PDO::PARAM_STR);
            $query->execute();
            echo 'Sucess';

            $sql ='SELECT*FROM `projets` WHERE `idprojet`=:id';
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_STR);
            $query ->execute();
            $result = $query->fetch();


?>
        <a href="projet_detail.php?id=<?php echo $result['idprojet'];?>"><button>Retour</button></a>

        <?php
        }else{
            echo 'Remplissez tous les champs';echo '<br><a href=home.php> Retour </a>';}

    }else{
        echo 'l\'Url n\'est pas valide';
    }
}else{
    echo 'Vous n\'êtes pas identifiez';
}