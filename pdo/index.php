<?php

    try 
    {        
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    } 

$requete = $db->query("SELECT disc_id FROM disc");
$compte = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

$requete = $db->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id ORDER BY disc.disc_year");
$disc = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();


?>


<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Liste</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style> img{width:200px; height:200px;}</style>
    </head>
    <body>

    <header></header>

        <div class="container ">
        <div class="row">
            <h1>Liste des disques : (<?= COUNT($compte) ?>)</h1> <div class="col-1"> </div> <a href="add_form.php" class="btn btn-primary">Ajouter<a>

        </div>
        </div>


        <div class="container">
            <div class="row">
            

            <?php foreach ($disc as $disc): ?>
            <div class="col-6 mt-3">
                <img src="../img/pictures/<?=$disc->disc_picture ?>">
                
                
                <p style="font-size:25px"><b><?= $disc->disc_title ?></b></p>
                <p><b><?= $disc->artist_name ?></b></p>
                <p><b>Label : </b><?= $disc->disc_label ?></p>
                <p><b>Year : </b><?= $disc->disc_year ?></p>
                <p><b>Genre : </b><?= $disc->disc_genre ?></p>



                    <a href="" class="btn btn-primary ">Détails</a>

            </div>
            <?php endforeach; ?>

                    
                
            
        </div>

        

        



        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
</html>