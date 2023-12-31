<?php
    try 
    {        
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'admin', 'Afpa1234');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");



    } 

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
        <link rel="icon" type="image/x-icon" href="../assets/img/images_the_district/the_district_brand/favicon.png">
        <style>div.hover{transform: scale(1.0 );  transition-duration: 0.5s ;}</style>
        <style>.hover:hover {transform: scale(1.12);}</style>
        <title>Catégorie</title>
    </head>
<?php
    function get_categories($db){
    
        
        $requete = $db->query("SELECT * FROM categorie WHERE active='Yes' ORDER BY id ;");
        $categorie = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();

        return $categorie;

    }







    function get_plats($db){
    
        
        $requete = $db->query("SELECT * FROM plat WHERE active='Yes' ORDER BY id LIMIT 6;");
        $plat = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();

        return $plat;

    }



    function get_acceuilplats($db){
    
        
        $requete = $db->query("SELECT * FROM plat LEFT JOIN commande ON commande.id_plat = plat.id WHERE active='Yes' AND etat !='Annulée' GROUP BY plat.id ORDER BY commande.quantite DESC LIMIT 3;");
        $acceuilplat = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();

        return $acceuilplat;

    }



    function get_catplats($db){



        $id_categorie = $_GET["id_categorie"];


        $requete = "SELECT * FROM plat WHERE id_categorie = :id_categorie ORDER BY id";
        $stmt = $db->prepare($requete);
        $stmt->bindParam(":id_categorie", $id_categorie, PDO::PARAM_INT);
        $stmt->execute();

        $catplat = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt->closeCursor();


        
        return $catplat;
    }






    function get_commande($db){



        $id = $_GET["id"];


        $requete = "SELECT * FROM plat WHERE id = :id ";
        $stmt = $db->prepare($requete);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        $commande = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt->closeCursor();


        
        return $commande;
    }







    

?>
</html>