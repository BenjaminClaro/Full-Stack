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
?>
</html>