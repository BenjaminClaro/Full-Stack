<?php

try
{        
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
} 

$requete = $db->prepare("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id=?");
$requete->execute(array($_GET["disc_id"]));
$disc = $requete->fetch(PDO::FETCH_OBJ);


$requete2 = $db->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id GROUP BY disc.artist_id ORDER BY disc.disc_year");
$disc2 = $requete2->fetchAll(PDO::FETCH_OBJ);
$requete2->closeCursor();


?>


<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Suppression du disque</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style> img{width:200px; height:200px;}</style>
    </head>
    <body>


        <div class="container ">
            <div class="row">
                <h1>Etes vous sur de vouloir supprimer <?=$disc->disc_title?> ?</h1>

            </div>
       

            <form action="delete_script.php" method="POST">

                <input type="text" class="form-control" name="id" id="id" value="<?=$disc->disc_id?>" readonly hidden>

                <label for="titre" class="mt-3">Titre</label>
                <input type="text" class="form-control" name="titre" id="titre" value="<?=$disc->disc_title?>" readonly>

                <label for="artiste" class="mt-3">Artiste</label>
                <input type="text" class="form-control" name="artiste" id="artist" value="<?=$disc->artist_name?>" readonly>

                <label for="annee" class="mt-3">Année</label>
                <input type="text" class="form-control" name="annee" id="annee" value="<?=$disc->disc_year?>" readonly>

                <label for="genre" class="mt-3">Genre</label>
                <input type="text" class="form-control" name="genre" id="genre" value="<?=$disc->disc_genre?>" readonly>

                <label for="label" class="mt-3">Label</label>
                <input type="text" class="form-control" name="label" id="label" value="<?=$disc->disc_label?>" readonly>

                <label for="prix" class="mt-3">Prix</label>
                <input type="text" class="form-control" name="prix" id="prix" value="<?=$disc->disc_price?>" readonly>

                <label for="image" class="mt-3">Image</label><br>
                <img src="../img/pictures/<?=$disc->disc_picture?>"> 
                <br>
        
                <button type="submit" value="suppr" name="suppr" class="btn btn-primary mt-3">Confirmer</button> <a href="index.php" class="btn btn-primary  mt-3">Retour</a>
        
            </form>

            </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
<html>