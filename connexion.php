<?php
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
];

// Now you create your connection string
try {
    // Then pass the options as the last parameter in the connection string
    $connection = new PDO("mysql:host=localhost; dbname=crud_php", 'root', '1234');

    // That's how you can set multiple attributes
} catch(PDOException $e) {
    die("Database connexion échoué: " . $e->getMessage());
}
if($connection){ echo "Connexion reussie" ;}
?>