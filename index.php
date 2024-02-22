<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD_PHP</title>
</head>
<body>
    <form action="" method="post" >
        <label for="">Nom du produit</label><input type="text" name="nom" autocomplete="off" ><br>
        
        <label for="">Prix du produit</label><input type="text" name="prix" autocomplete="off" ><br>
        
        <label for="">Quantité du produit</label><input type="number" min="1" name="quantite" autocomplete="off" ><br>
        <button type="submit" name="enregistrer" >Enregistrer</button>
         
    </form>
</body>
</html>

<?php
    require_once("connexion.php");

    if(isset($_POST['enregistrer']))

    {
        $nom=$_POST['nom'];
        $prix=$_POST['prix'];
        $quantite=$_POST['quantite'];

        if(!empty($nom) AND !empty($prix) AND !empty($quantite))
        {
            if(strlen($nom) < 5)
            {
                echo "Le nom du produit doit contenir au moins 5 caractères";
            }
            else
            {
                $req=$connection->prepare("INSERT INTO produits(nom,prix,quantite) VALUES(?,?,?)");
                $req->execute(array($nom,$prix,$quantite));

                if($req) { header("Location:afficher.php"); }
            }
        }
        else
        {
            echo "Veillez remplir tous les champs svp!";
        }
    }



?>