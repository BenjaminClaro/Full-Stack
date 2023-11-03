<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <link rel="icon" type="image/x-icon" href="../assets/img/images_the_district/the_district_brand/favicon.png">
    <title>Commande</title>
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



    <form>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-3 card m-3 ">
                <img class="card-img-top" src="../assets/img/images_the_district/food/hamburger.jpg">
                <div class="card-body">
                  <h4 class="card-title">Hamburger</h4>
                  <p class="card-text">
                    Burger classique. 4€
                  </p>
                  <p class="card-text"> Quantité = 1</p>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <label for="nom">Nom et Prénom</label>
                <input type="text" class="form-control" name="nom" id="nom" required>
                <span id="nom_manquant"></span>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <label for="mail">E-Mail</label>
                <input type="email" class="form-control" name="mail" id="mail" required>
                <span id="mail_manquant"></span>
            </div>
            <div class="col-1"></div>
            <div class="col">
                <label for="tel">Téléphone</label>
                <input type="tel" class="form-control" name="tel" id="tel" required>
                <span id="tel_manquant"></span>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <label for="adresse">Votre adresse</label>
                <textarea class="form-control" name="adresse" id="adresse" rows="5" required> </textarea>
                <span id="adresse_manquant"></span>
            </div>
            <div class="col-1"></div>
        </div>




        <button type="submit" class="btn btn-primary justify-content-center" id="submit">Envoyer</button>

    </form>


    <div class="pb-5"></div>

    <?php  require 'footer.php'  ?>



    <script src="../js/commande.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../js/javascript.js"></script>
</body>
</html>