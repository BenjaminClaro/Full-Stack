<!DOCTYPE html>
<html lang="en">
<head>
    <meta>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../assets/img/images_the_district/the_district_brand/favicon.png">
    <style>div.hover{transform: scale(1.0 );  transition-duration: 0.5s ;}</style>
    <style>.hover:hover {transform: scale(1.12);}</style>

    <style>.para{background-image: url(../assets/img/images_the_district/paralax.png);  min-height: 300px; background-attachment: fixed;  background-position: center; background-repeat: no-repeat; background-size: cover;}</style>

    <title>Acceuil</title>
</head>


<body>
    
    <?php require "header.php" ?>


    <div>
        <div>
            <video width="100%" height="240" autoplay muted loop>
                <source src="../assets/video/Rotating Cow.mp4" type="video/mp4" alt="Rotating Cow.mp4">
            </video>
        </div>
            <div class="search-container d-none d-md-block text-center">
                <form action="../html/index.html">
                <input type="text"  placeholder="Search.." name="search">
                <button type="submit">Search</i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="para"></div>

    <div class="container">
        <div class="text font-weight-bold h2 mt-2 d-none d-md-block">Catégories :</div>
        <?php
        include "DAO.php";
        
        ?>
                
                <div class="row ">
                <?php
                    $categorie = get_categories($db);

                    foreach($categorie as $categorie){



                        echo '<div class="col-3 d-none d-md-block mt-3 hover">' . $categorie->libelle . '<a href="plat.php?id_categorie='. $categorie->id .'"><img src="../assets/img/images_the_district/category/' . $categorie->image . '" alt="' . $categorie->libelle . '" class="img-fluid img-thumbnail"></a></div>';
                        echo '<div class="col-1"> </div>';

                        
                    }
                ?>  
                
                </div>

    <div class="container-fluid">
        <div class="text font-weight-bold h2 mt-2">Plats :</div>
        <div class="row ">

                <?php
                    $acceuilplat = get_acceuilplats($db);

                    foreach($acceuilplat as $acceuilplat){



                        echo '<div class="col-3 d-none d-md-block ">' . $acceuilplat->libelle . '<a href="commande.php?id= '. $acceuilplat->id_plat . ' "><img src="../assets/img/images_the_district/food/' . $acceuilplat->image . '" alt="'. $acceuilplat->libelle .'" class="img-fluid img-thumbnail"></a></div>';
                        echo '<div class="col-1"> </div>';
                        echo '<div class="d-block d-md-none"><a href="commande.php?id= ' .$acceuilplat->id_plat .'"><img src="../assets/img/images_the_district/food/' . $acceuilplat->image . '" alt="'. $acceuilplat->libelle .'" class="img-fluid img-thumbnail"><br>' . $acceuilplat->libelle . '</a></div>';
                        
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