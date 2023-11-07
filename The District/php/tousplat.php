<!DOCTYPE html>
<html lang="en">
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






    <div id="carouselcat" class="carousel slide d-none d-md-block" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid "></div>
                    <div class="text font-weight-bold h2 "id="burger">Burger</div>
                <div class="row ">
                    <div class="col-2"> </div>
                    <div class="col-3 card col-3 m-3 d-none d-md-block">
                        <img class="card-img-top" src="../assets/img/images_the_district/food/cheesburger.jpg">
                        <div class="card-body">
                          <h4 class="card-title">Cheeseburger</h4>
                          <p class="card-text">
                            Burger au fromage. 5€
                          </p>
                          <a href="commande.php" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                    <div class="col-1"> </div>
                    <div class="col-3 card col-3 m-3 d-none d-md-block">
                        <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-433.jpeg">
                        <div class="card-body">
                          <h4 class="card-title">Burger XL</h4>
                          <p class="card-text">
                            Burger très gros. 6€
                          </p>
                          <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-2"> </div>
                    <div class="col-3 card col-3 m-3 d-none d-md-block">
                        <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-6340.jpg">
                        <div class="card-body">
                          <h4 class="card-title">Beefburger</h4>
                          <p class="card-text">
                            Burger 80% boeuf. 7.50€
                          </p>
                          <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                    <div class="col-1"> </div>
                    <div class="col-3 card col-3 m-3 d-none d-md-block">
                        <img class="card-img-top" src="../assets/img/images_the_district/food/hamburger.jpg">
                        <div class="card-body">
                          <h4 class="card-title">Hamburger</h4>
                          <p class="card-text">
                            Burger classique. 4€
                          </p>
                          <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="carousel-item" >
                <div class="container-fluid "></div>
                    <div class="text font-weight-bold h2 "id="salade">Salade</div>
                  <div class="row ">
                      <div class="col-2"> </div>
                      <div class="col-3 card col-3 m-3 d-none d-md-block">
                          <img class="card-img-top" src="../assets/img/images_the_district/food/cesar_salad.jpg">
                            <div class="card-body">
                              <h4 class="card-title">Salade cesar</h4>
                              <p class="card-text">
                                Salade cesar. 3€
                              </p>
                              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                            </div>
                      </div>
                      <div class="col-1"> </div>
                      <div class="col-3 card col-3 m-3 d-none d-md-block">
                          <img class="card-img-top" src="../assets/img/images_the_district/food/salad1.png">
                          <div class="card-body">
                            <h4 class="card-title">Salade poulet</h4>
                            <p class="card-text">
                              Salade au poulet 3€
                            </p>
                            <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                          </div>
                      </div>
                  </div>
                </div>
            </div>

            <div class="carousel-item" >
                <div class="container-fluid "></div>
                    <div class="text font-weight-bold h2 "id="sandwich">Sandwich</div>
                    <div class="row ">
                      <div class="col-2"> </div>
                      <div class="col-3 card col-3 m-3 d-none d-md-block">
                        <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-3631.jpg">
                        <div class="card-body">
                          <h4 class="card-title">Croque-monsieur</h4>
                          <p class="card-text">
                            Fromage et jambon 4€
                          </p>
                          <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item">
              <div class="container-fluid "></div>
                  <div class="text font-weight-bold h2 "id="pizza">Pizza</div>
                <div class="row ">
                  <div class="col-2"> </div>
                  <div class="col-3 card col-3 m-3 d-none d-md-block">
                    <img class="card-img-top" src="../assets/img/images_the_district/food/pizza-margherita.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Pizza margherita</h4>
                      <p class="card-text">
                        Pizza classique. 6€
                      </p>
                      <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                    </div>
                </div>
                  </div>
                  <div class="col-1"> </div>
                  <div class="col-3 card col-3 m-3 d-none d-md-block">
                    <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-8298.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Pizza épinards</h4>
                      <p class="card-text">
                        Epinards 5€
                      </p>
                      <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                    </div>
                </div>
              

                <div class="row ">
                  <div class="col-2"> </div>
                  <div class="col-3 card col-3 m-3 d-none d-md-block">
                    <img class="card-img-top" src="../assets/img/images_the_district/food/pizza-salmon.png">
                    <div class="card-body">
                      <h4 class="card-title">Pizza saumon</h4>
                      <p class="card-text">
                        Poisson 6€
                      </p>
                      <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="carousel-item" >
              <div class="container-fluid "></div>
                  <div class="text font-weight-bold h2 "id="wrap">Wrap</div>
                <div class="row ">
                    <div class="col-2"> </div>
                    <div class="col-3 card col-3 m-3 d-none d-md-block">
                      <img class="card-img-top" src="../assets/img/images_the_district/food/buffalo-chicken_1.jpg">
                      <div class="card-body">
                        <h4 class="card-title">Wrap bison poulet</h4>
                        <p class="card-text">
                          Beaucoup de viande. 7€
                        </p>
                        <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                      </div>
                    </div>
                    <div class="col-1"> </div>
                    <div class="col-3 card col-3 m-3 d-none d-md-block">
                      <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-3461.jpg">
                      <div class="card-body">
                        <h4 class="card-title">Wrap poulet</h4>
                        <p class="card-text">
                          Wrap au poulet 6€
                        </p>
                        <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>

          <div class="carousel-item">
            <div class="container-fluid "></div>
                <div class="text font-weight-bold h2 "id="pate">Pâtes</div>
            <div class="row ">
                <div class="col-2"> </div>
                <div class="col-3 card col-3 m-3 d-none d-md-block">
                  <img class="card-img-top" src="../assets/img/images_the_district/food/spaghetti-legumes.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Pizza margherita</h4>
                    <p class="card-text">
                      Spaghetti. 6€
                    </p>
                    <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                  </div>
                </div>
                <div class="col-1"> </div>
                <div class="col-3 card col-3 m-3 d-none d-md-block">
                  <img class="card-img-top" src="../assets/img/images_the_district/food/tagliatelles-saumon.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Tagliatelles saumon</h4>
                    <p class="card-text">
                      Avec du poisson. 6€
                    </p>
                    <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                  </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-2"> </div>
                <div class="col-3 card col-3 m-3 d-none d-md-block">
                  <img class="card-img-top" src="../assets/img/images_the_district/food/lasagnes_viande.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Lasagnes</h4>
                    <p class="card-text">
                      au boeuf. 6€
                    </p>
                    <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                  </div>
                </div>  
            </div>

          </div>


        <div class="carousel-item" >
          <div class="container-fluid "></div>
              <div class="text font-weight-bold h2 "id="vege">Végétarien</div>
              <div class="row ">
                <div class="col-2"> </div>
                <div class="col-3 card col-3 m-3 d-none d-md-block">
                  <img class="card-img-top" src="../assets/img/images_the_district/food/courgettes_farcies.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Courgette farcie</h4>
                    <p class="card-text">
                      Sans viande. 5€
                    </p>
                    <a href="../html/commande.html" class="btn btn-primary">Commander</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>


 





    <a class="carousel-control-prev" href="#carouselcat" data-slide="prev">
        <span class="carousel-control-prev-icon d-none d-md-block"><img src="../assets/img/images_the_district/fleche2.png" alt=""></span>
      </a>
      <a class="carousel-control-next" href="#carouselcat" data-slide="next">
        <span class="carousel-control-next-icon d-none d-md-block"><img src="../assets/img/images_the_district/fleche.png" alt=""></span>
      </a>







        <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/cheesburger.jpg">
            <div class="card-body">
              <h4 class="card-title">Cheeseburger</h4>
              <p class="card-text">
                Burger au fromage. 5€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
        </div>
        <div class="col-1"> </div>
        <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-433.jpeg">
            <div class="card-body">
              <h4 class="card-title">Burger XL</h4>
              <p class="card-text">
                Burger très gros. 6€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
        </div>
    </div>

    
        <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-6340.jpg">
            <div class="card-body">
              <h4 class="card-title">Beefburger</h4>
              <p class="card-text">
                Burger 80% boeuf. 7.50€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
        </div>
        <div class="col-1"> </div>
        <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/hamburger.jpg">
            <div class="card-body">
              <h4 class="card-title">Hamburger</h4>
              <p class="card-text">
                Burger classique. 4€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
        </div>
        <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/cesar_salad.jpg">
            <div class="card-body">
              <h4 class="card-title">Salade cesar</h4>
              <p class="card-text">
                Salade cesar. 3€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
          </div>
          <div class="col-1"> </div>
          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/salad1.png">
            <div class="card-body">
              <h4 class="card-title">Salade poulet</h4>
              <p class="card-text">
                Salade au poulet 3€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
          </div>
          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-3631.jpg">
            <div class="card-body">
              <h4 class="card-title">Croque-monsieur</h4>
              <p class="card-text">
                Fromage et jambon 4€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
          </div>
  

          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/pizza-margherita.jpg">
            <div class="card-body">
              <h4 class="card-title">Pizza margherita</h4>
              <p class="card-text">
                Pizza classique. 6€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
          </div>
          <div class="col-1"> </div>
          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-8298.jpg">
            <div class="card-body">
              <h4 class="card-title">Pizza épinards</h4>
              <p class="card-text">
                Epinards 5€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
          </div>
      </div>
  
      
          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/pizza-salmon.png">
            <div class="card-body">
              <h4 class="card-title">Pizza saumon</h4>
              <p class="card-text">
                Poisson 6€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
          </div>


          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/buffalo-chicken_1.jpg">
              <div class="card-body">
                <h4 class="card-title">Wrap bison poulet</h4>
                <p class="card-text">
                  Beaucoup de viande. 7€
                </p>
                <a href="../html/commande.html" class="btn btn-primary">Commander</a>
              </div>
          </div>
          <div class="col-1"> </div>
          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/Food-Name-3461.jpg">
              <div class="card-body">
                <h4 class="card-title">Wrap poulet</h4>
                <p class="card-text">
                  Wrap au poulet 6€
                </p>
                <a href="../html/commande.html" class="btn btn-primary">Commander</a>
              </div>
          </div>



          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/spaghetti-legumes.jpg">
              <div class="card-body">
                <h4 class="card-title">Pizza margherita</h4>
                <p class="card-text">
                  Spaghetti. 6€
                </p>
                <a href="../html/commande.html" class="btn btn-primary">Commander</a>
              </div>
          </div>
          <div class="col-1"> </div>
          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/tagliatelles-saumon.jpg">
              <div class="card-body">
                <h4 class="card-title">Tagliatelles saumon</h4>
                <p class="card-text">
                  Avec du poisson. 6€
                </p>
                <a href="../html/commande.html" class="btn btn-primary">Commander</a>
              </div>
          </div>
      </div>
  
      
          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/lasagnes_viande.jpg">
              <div class="card-body">
                <h4 class="card-title">Lasagnes</h4>
                <p class="card-text">
                  au boeuf. 6€
                </p>
                <a href="../html/commande.html" class="btn btn-primary">Commander</a>
              </div>
          </div>

          <div class="card m-3 d-block d-md-none">
            <img class="card-img-top" src="../assets/img/images_the_district/food/courgettes_farcies.jpg">
            <div class="card-body">
              <h4 class="card-title">Courgette farcie</h4>
              <p class="card-text">
                Sans viande. 5€
              </p>
              <a href="../html/commande.html" class="btn btn-primary">Commander</a>
            </div>
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