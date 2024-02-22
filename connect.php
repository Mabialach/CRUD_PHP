<?php
 try {$pdo = new PDO("mysql:host=localhost; dbname=crud_php", 'root', '1234');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } 
    catch (PDOExceptions $e)
     {
        echo "Echec de connexion" . $e->getMessage();
     }
     if($pdo){ echo "Connexion reussie";}
?>