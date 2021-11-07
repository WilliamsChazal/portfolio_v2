<?php
session_start();
?>

<?php include('./header_admin.php')?>

<div class="container vh-100 d-flex justify-content-center align-items-center">

<form action="skills_handler.php" method="post" enctype="multipart/form-data">
<titre>Ajouter une compétences</titre> <br>
<div class="mb-3">
  <label for="input_titre" class="form-label">Titre</label>
  <input type="texte" class="form-control" name="skills_titre" id="exampleFormControlInput1" placeholder="Titre de la compétence">
</div>
<div class="mb-3">
  <label for="input_texte" class="form-label">Description</label>
  <textarea class="form-control" name="skills_texte" id="exampleFormControlTextarea1" placeholder="Description de la compétence" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="input_logo" class="form-label">Logo de la compétence</label>
  <input class="form-control"  name="skills_logo" type="file" id="formFile">
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Enregistrer la compétence</button>
  </div>
</form>
</div>


<?php include('./footer_admin.php')?>