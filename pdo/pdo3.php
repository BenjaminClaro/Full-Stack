<?php


$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district";


try {
    $conn = new PDO("mysql:host=localhost;dbname=the_district", "admin", "Afpa1234");

    // Effectuer une opération de base de données

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

    
?> 


<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
<?php




$stmt = $pdo->prepare("SELECT * FROM plat");
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
</body>
</html>

