<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <link rel="icon" type="image/x-icon" href="../assets/img/images_the_district/the_district_brand/favicon.png">
    <title>Tous les plats</title>
</head>

<body>
<?php require "header.php" ?>


    <div>
        <div class="responsive img-fluid w-100 p-5" style="background-image: url(../assets/img/images_the_district/bg2.jpg); background-size: cover;">
            <div class="search-container d-none d-md-block text-center">
                <form action="../html/index.html">


                </form>
            </div>
        </div>
    </div>






    
    <div class="container">
        <div class="text font-weight-bold h2 ">Tout les plats</div>
                    <?php
          include "DAO.php";
        
        ?>
    
        <div class="row ">
        <?php
          $plat = get_plats($db);

          foreach($plat as $plat){
        ?>
            <div class="col-4 mb-3 card d-none d-md-block">
              <img class="card-img-top" src="../assets/img/images_the_district/food/<?=$plat->image?>" alt="<?=$plat->libelle?>">
              <div class="card-body">
                <h4 class="card-title"><?=$plat->libelle?></h4>
                <p class="card-text">
                  <?=$plat->description?> 
                </p>

                <a href="commande.php?id=<?=$plat->id?>" class="btn btn-primary">Commander</a> <?=$plat->prix?>€
              </div>
            </div>



            <div class="card m-3 d-block d-md-none">
              <img class="card-img-top" src="../assets/img/images_the_district/food/<?=$plat->image?>" alt="<?=$plat->libelle?>">
              <div class="card-body">
                <h4 class="card-title"><?=$plat->libelle?></h4>
                <p class="card-text">
                  <?=$plat->description?> 
                </p>
                <a href="commande.php?id=<?=$plat->id?>" class="btn btn-primary">Commander</a> <?=$plat->prix?>€
              </div>
            </div>
        <?php  
          }
        ?>  
    </div>
                
                    






    <div class="pb-5"></div>
    <?php  require 'footer.php'  ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../js/javascript.js"></script>
  </body>
</html>