
<?php
session_start();

if($_SESSION['username']){
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `projets` WHERE `idprojet`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query ->execute();
        $result = $query->fetch();
        /* var_dump($result); */
    }else{
        echo 'l\'Url n\'est pas valide';
    }
}else{
    echo 'Vous n\'êtes pas identifiez';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titre>Modifier le projet <br>  <?=$result['projet_titre']?></titre>
</head>
<body>

<form action="projet_handler.php" method="post" enctype="multipart/form-data"> 

<div>
    <label for="input_titre">Titre</label>
    <input type="text" id="input_titre" name="projet_titre">
</div>

<div>
    <label for="input_debut">Date de démarrage</label>
    <input type="date" id="input_debut" name="projet_debut">
</div>

<div>
    <label for="input_end">Date de fin</label>
    <input type="date" id="input_end" name="projet_fin">
</div>

<div>
    <label for="input_context">Contexte</label>
    <textarea name="projet_context" id="input_context" cols="30" rows="10"></textarea>
</div>

<div>
    <label for="input_specs">Spécifications fonctionnelles</label>
    <textarea name="projet_specs" id="input_specs" cols="30" rows="10"></textarea>
</div>

<div>
    <label for="input_type">Type du projet</label>
    <select name="projet_type" id="input_type">
        <option value="jeu">Jeu</option>
        <option value="web">Web</option>
    </select>
</div>

<div>
    <label for="input_githublink">Lien GitHub</label>
    <input type="text" id="input_githublink" name="projet_githublink">
</div>

<div>
    <label for="input_link">Lien du projet</label>
    <input type="text" id="input_link" name="projet_link">
</div>

<div>
    <input type="submit">
</div>

</form>
<br>
<br>
<br>
    <form action="picture-edit-handler.php" method="post" enctype="multipart/form-data">

<div>
    <label for="input_picture">Aperçu</label>
    <input type="file" id="input_picture" name="projet_image">
    <input type="hidden" name="idprojet" value='<?= $result['idprojet'] ?>'>
    <div><input type="submit"></div>
</div>
</form>

<br>
<br>
<br>

    <form action="logo-edit-handler.php" method="post" enctype="multipart/form-data">

<div>
        <label for="input_logo">Logo</label>
        <input type="file" id="input_logo" name="projet_logo">      
    <input type="hidden" name="idprojet" value='<?= $result['idprojet'] ?>'>
</div>

<div>
    <input type="submit">
</div>

</form>
<br>

<a href="projet-detail.php?id=<?=$result['idprojet']?>"><button>Retour</button></a>
</body>
</html>