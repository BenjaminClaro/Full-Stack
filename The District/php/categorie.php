<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <link rel="icon" type="image/x-icon" href="../assets/img/images_the_district/the_district_brand/favicon.png">
    <style>div.hover{transform: scale(1.0 );  transition-duration: 0.5s ;}</style>
    <style>.hover:hover {transform: scale(1.12);}</style>
    <title>Catégorie</title>
</head>


<body>

    <?php require "header.php" ?>


    <div>
        <div class="responsive img-fluid w-100 p-5" style="background-image: url(../assets/img/images_the_district/bg2.jpg); background-size: cover;">

        </div>
    </div>
    <div class="container ">
        <div class="text font-weight-bold h2 mt-2 ">Catégories :</div>
      

        <?php
        include "DAO.php";
        
        ?>
                
                <div class="row ">
                <?php
                
                    $categorie = get_categories($db);


                    foreach($categorie as $categorie){



                        echo '<div class="col-3 d-none d-md-block mt-3 hover">' . $categorie->libelle . '<a href="plat.php?id_categorie='. $categorie->id .'"><img src="../assets/img/images_the_district/category/' . $categorie->image . '" alt="' . $categorie->libelle . '" class="img-fluid img-thumbnail"></a></div>';
                        echo '<div class="col-1"> </div>';

                        echo '<div class=" m-3 d-block d-md-none ">' . $categorie->libelle . '<br><a href="plat.php?id_categorie='. $categorie->id .'"><img src="../assets/img/images_the_district/category/' . $categorie->image . '" alt="' . $categorie->libelle . '" class="img-fluid img-thumbnail"></a></div>';

                    }
                ?>  
                
                </div>


    </div>

                
                    






    <div class="pb-5"></div>
    <?php  require 'footer.php'  ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../js/javascript.js"></script>
  </body>
</html>