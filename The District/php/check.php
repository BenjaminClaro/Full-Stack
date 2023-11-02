<?php

$prenom = $_REQUEST['prenom'];
$nom = $_REQUEST['nom'];
$mail = $_REQUEST['mail'];
$tel = $_REQUEST['tel'];
$demande = $_REQUEST['demande'];





$date = new DateTime();

$convert = $date -> format("Y-m-d-H-i-s");



$fichier = fopen("../txt/$convert.txt", 'c+');

fwrite($fichier,"Prenom : " . $prenom . "\nNom : " . $nom . "\nTéléphone : " . $tel . "\nE-mail : " . $mail . "\nDemande : " . $demande . "\n" );

?>