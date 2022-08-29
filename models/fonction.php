<?php

require_once "bd.php";

function insereEtudiant($nom,$prenom,$adresse,$telephone)
{
    $req = "INSERT INTO etudiant(nomEt,prenomEt,adresse,telephone) VALUES ('$nom','$prenom','$adresse','$telephone')";
    global $bd;
    return $bd -> exec($req); 
}



function obtenirEtudiant()
{
    $req = "SELECT * FROM etudiant";
    global $bd;
    return $bd -> query($req) -> fetchAll();
}

// function trouverEtudiant($id)
// {
//     $req = "SELECT * FROM etudiant where id = $id";
//     global $bd;
//     return $bd -> query($req) -> fetch();
// }

// function modiftudiant($nom,$prenom,$ville,$email,$adresse,$fil,$tel,$idNiv,$id)
// {
//     $req = "UPDATE etudiant SET nomEt = '$nom', prenomEt = '$prenom', villeEt = '$ville', emailEt = '$email', adresseEt = '$adresse',filEt = '$fil', telEt = '$tel',  idNivF = $idNiv where id = $id ";

//     global $bd;
//     return $bd -> exec($req);
// }


?>