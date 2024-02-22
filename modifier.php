<?php

    require_once("connexion.php");

    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        $req=$connection->query("SELECT * FROM produits WHERE id=$id");
        $mod=$req->fetch();
    }
?>
       <h2>Modification du produit</h2>

  <form action="" method="post" >
     <label for="">Nom du produit</label>
     <input value="<?php echo $mod['nom']; ?>" type="text" name="nom" autocomplete="off" ><br>
                
     <label for="">Prix du produit</label>
     <input value="<?php echo $mod['prix']; ?>" type="text" name="prix" autocomplete="off" ><br>
                
     <label for="">Quantité du produit</label>
     <input value="<?php echo $mod['quantite']; ?>" type="number" min="1" name="quantite" autocomplete="off" ><br>
     <button type="submit" name="modifier" >Enregistrer les modifications</button>
                
  </form>

<?php

    if(isset($_POST['modifier']))
    {
        $nom=$_POST['nom'];
        $prix=$_POST['prix'];
        $quantite=$_POST['quantite'];
        $req=$connection->prepare("UPDATE produits SET nom= ?, prix= ?, quantite= ? WHERE id=$id");
        $req->execute(array($nom, $prix, $quantite));

        if($req)
        {
            header("Location:afficher.php");
        }
    }


?>
