<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
<div class="container vh-100 d-flex justify-content-center align-items-center">

<form action="skills_handler.php" method="post" enctype="multipart/form-data">
<titre>Ajouter une compétences</titre> <br>
<div class="mb-3">
  <label for="input_titre" class="form-label">Titre</label>
  <input type="texte" class="form-control" id="exampleFormControlInput1" placeholder="Titre de la compétence">
</div>
<div class="mb-3">
  <label for="input_texte" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description de la compétence" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="input_logo" class="form-label">Logo de la compétence</label>
  <input class="form-control" type="file" id="formFile">
</div>
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>