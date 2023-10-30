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




if(isset($_POST["suppr"])){

    $id = $_POST["id"];

    try{

        $db->beginTransaction();

        $requete = $db->prepare("DELETE FROM disc WHERE disc_id = $id");
        
        $requete->execute();
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