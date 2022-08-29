<?php
include_once "../header.php";
require_once "fonction.php";

$tableEt = obtenirEtudiant();
?>
<div class="container  mt-5">
    <div class="card">
    <div class="card-header bg-primary">
        <h3 class="text-center  text-white" style="font-family: 'Cambria Math';font-weight: bold">Liste D'Enregistrement</h3>
    </div>
    <div class="card-body ">
        
   <div class="table-responsive">
  <table class="table table-striped table-bordered text-" style="width: 800px;">
            <thead>
                <tr>
                    <th>N°</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Date</th>
    <th> Adresse</th>
    <th>Telephone</th>
</tr>
</thead>
    <?php foreach($tableEt as $key) { ?>
        <tbody>
        <tr>
            <td> <?= $key['id'] ?> </td>
            <td> <?= $key['nomEt'] ?></td>
            <td> <?= $key['prenomEt'] ?> </td>
            <td> <?= $key['date'] ?> </td>
            <td> <?= $key ['adresse'] ?> </td>
            <td> <?= $key['telephone'] ?> </td>
        </tr>
    </tbody>
    <?php  } ?>
    
</div>
</table>
    </div>
<a href="http://localhost//sortie/" class="btn btn-primary offset-6 ">Ajouter</a>
</div>
</div>


