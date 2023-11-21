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



if(isset($_POST["envoi"])){
    $nom = $_POST["nom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $id_plat = $_POST["id_plat"];
    $prix = $_POST["prix"];
    $dates= date('Y-m-d H:i:s');
    $quantite = $_POST["quantite"];
    $total = ($prix * $quantite);


    var_dump($_POST["prix"]);

    try{

        $db->beginTransaction();

        $requete = $db->prepare("INSERT INTO commande(id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) 
                                        VALUES(:id_plat, :quantite, :total, :date_commande, :etat, :nom_client, :telephone_client, :email_client, :adresse_client)");
        
        $requete->bindValue(":id_plat", "$id_plat");
        $requete->bindValue(":quantite", "$quantite");
        $requete->bindValue(":total", "$total");
        $requete->bindValue(":date_commande", $dates);
        $requete->bindValue(":etat", "En cours de livraison");
        $requete->bindValue(":nom_client", "$nom");
        $requete->bindValue(":telephone_client", "$tel");
        $requete->bindValue(":email_client", "$mail");
        $requete->bindValue(":adresse_client", "$adresse");
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