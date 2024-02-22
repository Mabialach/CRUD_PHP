<?php
require_once("connexion.php");

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $req=$connection->prepare("DELETE FROM produits WHERE id=?");
    $req->execute(array($id));
    if($req)
    {
        header("Location:afficher.php");

    }
}

?>