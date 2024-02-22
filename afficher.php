<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos produits</title>
</head>

<style>
    table{
        border: 2px solid black;
    }
    td,th
    {
        border: 1px solid black;  
        border-collapse: collapse;
    }
</style>
<body>
    <h4>Liste de tous nos produits</h4>

    <table>
        <th>ID</th>
        <th>Nom du produit</th>
        <th>Prix du produit</th>
        <th> Quantité du produit</th>
        <th>Actions</th>

        <?php

        require_once("connexion.php");

        $req=$connection->query("SELECT * FROM produits");

        while($aff=$req->fetch()){?>

        <tr>
            <td> <?php  echo $aff['id']; ?></td>
            <td> <?php  echo $aff['nom']; ?></td>
            <td> <?php echo $aff['prix']  ?></td>
            <td> <?php  echo $aff['quantite'] ?></td> 
            <td>
                <a href="modifier.php?id=<?php echo $aff['id']?>">Modifier</a>
                <a href="supprimer.php?id=<?php echo $aff['id']?>">Supprimer</a>

            </td>
        </tr>

        <?php }?>
    </table>
</body>
</html>