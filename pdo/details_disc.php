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
    
    $requete = $db->prepare("select * from disc where disc_id=?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
    
    


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
<?php
    if ($disc->disc_id != NULL){
        echo " Disc N°", $disc->disc_id;
        echo " Disc name ", $disc->disc_title ;
        echo " Disc year ", $disc->disc_year ;
    }
    else{
        echo "Pas de disc trouvé";
    }
?>
</body>
</html>