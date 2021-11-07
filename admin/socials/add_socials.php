<?php
session_start();
?>

<?php include('./../header_admin.php')?>
<div class="container vh-100 d-flex justify-content-center align-items-center">

<form action="socials_handler.php" method="post" enctype="multipart/form-data">
<titre>Ajouter un RS</titre> <br>
<div class="mb-3">
  <label for="input_titre" class="form-label">Titre</label>
  <input type="texte" class="form-control" name="social_titre" id="exampleFormControlInput1" placeholder="Titre">
</div>
<div class="mb-3">
  <label for="input_logo" class="form-label">Logo</label>
  <input class="form-control"  name="social_logo" type="file" id="formFile">
</div>
<div class="mb-3">
<label for="input_titre" class="form-label">lien</label>
  <input type="texte" class="form-control" name="social_link" id="exampleFormControlInput1" placeholder="lien">
</div>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Enregistrer le réseau social</button>
  </div>
  <a href="socials.php"><button type="button" class="btn btn-primary">Retour</button></a>
</form>

</div>


<?php include('./../footer_admin.php')?>