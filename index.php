<?php

    include_once "header.php";
    require_once "models/fonction.php";
    $table = obtenirEtudiant();
    if(isset($_POST['ajout']))
    {
        extract($_POST);
        if(insereEtudiant($nom,$prenom,$adresse,$telephone))
        {
            //header("location:http://localhost//sortie/models/liste.php");
            echo '<h3 id="h3" class="alert alert-danger bg-success text-white">Enregistrement Reussi </h3>';
        }
        else
        {
            echo '<h3 id="h3" class="alert alert-danger bg-primary text-white">erreur </h3>';
        }
    }

?>

<div class="container col-md-6 mt-5">
    <div class="card-header bg-transparent">
        <h3 class="text-white text-center">Enregistrement</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                
                
                <div class="form-floating mb-3">

                <label for="floatingInput" style=" font-weight:bolder;">Nom</label>
                <input type="text" name="nom" value="" id="floatingInput" class="form-control text-white "  style="   background: transparent;font-weight:bolder;" placeholder="ATTOISSE" required>
                </div>
                <label for="floatingInput" style=" font-weight:bolder;">Prenom</label>
                <input type="text" name="prenom" value="" id="floatingInput" class="form-control text-white"  style="   background: transparent;font-weight:bolder;"placeholder="MOHAMED" required>
                
                <label for="floatingInput"style=" font-weight:bolder;">Adresse</label>
                <input type="text" name="adresse" value=""id="floatingInput" class="form-control text-white"  style="   background: transparent;font-weight:bolder;"placeholder="GD DAKAR" required>
                <label for="floatingInput"style=" font-weight:bolder;">Telephone</label>
                <input type="number" name="telephone" value=""id="floatingInput" class="form-control text-white"  style="   background: transparent;font-weight:bolder;"placeholder="78 102 90 60" required>
                <button  type="submit" name="ajout" class="btn btn-success hover-overlay mt-5 offset-2">Enregistrer</button>
               
                <a href="http://localhost/sortie/models/liste.php" class="btn btn-primary offset-7" style="margin-top: -60px;">liste</a>
                
        
            </form>
        </div>

</div>
<script>
const h3 = document.querySelector('#h3');
console.log(h3);
setTimeout(()=>{
h3.setAttribute("hidden","");
},3000)
</script>