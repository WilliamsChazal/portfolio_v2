<?php
session_start();
?>

<?php include('./header_admin.php')?>

<div class="container vh-100 d-flex justify-content-center align-items-center">

<form action="design_handler.php" method="post" enctype="multipart/form-data">
<titre>Ajouter un Design</titre> <br>
<div class="mb-3">
  <label for="input_titre" class="form-label">Titre</label>
  <input type="texte" class="form-control" name="design_titre" id="exampleFormControlInput1" placeholder="Titre de la compétence">
</div>
<div class="mb-3">
  <label for="input_texte" class="form-label">Description</label>
  <textarea class="form-control" name="design_texte" id="exampleFormControlTextarea1" placeholder="Description du design" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="input_logo" class="form-label">Aperçu du Design</label>
  <input class="form-control"  name="design_thumbnail" type="file" id="formFile" placeholder="Fichier du Design">
</div>
<div class="mb-3">
  <label for="input_file" class="form-label">Fichier du Design</label>
  <input class="form-control"  name="design_file" type="file" id="formFile" placeholder="Fichier du Design">
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Enregistrer le document</button>
  </div>
</form>
</div>


<?php include('./footer_admin.php')?>