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




if(isset($_POST["modif"])){
    $titre = $_POST["titre"];
    $artiste = $_POST["artiste"];
    $annee = $_POST["annee"];
    $genre = $_POST["genre"];
    $label = $_POST["label"];
    $prix = $_POST["prix"];
    $image = $_POST["image"];
    $id = $_POST["id"];

    try{

        $db->beginTransaction();

        $requete = $db->prepare("UPDATE disc SET disc_title = :disc_title, disc_year = :disc_year, disc_picture = :disc_picture, disc_label = :disc_label, disc_genre = :disc_genre, disc_price = :disc_price, artist_id = :artist_id 
                                WHERE disc_id = $id");
        
        $requete->bindValue(":disc_title", "$titre");
        $requete->bindValue(":disc_year", "$annee");
        $requete->bindValue(":disc_picture", "$image");
        $requete->bindValue(":disc_label", "$label");
        $requete->bindValue(":disc_genre", "$genre");
        $requete->bindValue(":disc_price", "$prix");
        $requete->bindValue(":artist_id", "$artiste");
        $requete->execute();
        $disc_id = $db->lastInsertId();

        $db->commit();

        header("Location: index.php");
        exit;
        
        
    } catch (PDOException $e) {
        // En cas d'erreur, annuler la transaction
        $conn->rollback();
        echo "Erreur : " . $e->getMessage();

    }


}

?>