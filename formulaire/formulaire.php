<?php
$conn=mysqli_connect("localhost","root","","class_eleve");
if(!$conn){
   die("erreur".mysqli_connect_error()) ;
}
echo"connexion reussie";
extract($_POST);
if(isset($btsubmit)){
    
    $sql="insert into eleve (ele_id,ele_nom,ele_prenom,ele_adresse,ele_codepostal,ele_ville,ele_promotion) values (null,'$ele_nom','$ele_prenom','$ele_adresse','$ele_codepostal','$ele_ville','$ele_promotion')";
    $result = mysqli_query($conn,$sql);
    if($result===false){
        echo mysqli_error($conn);
        exit;
    }
    header("location:../accueil"); 
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <head>
        <nav>
            <?php require "../accueil/index.php"?>
        </nav>

</head>
<body>
    <h2>Formulaire: </h2>
<form method="post" >
    <p>
<label for="nom">nom: </label> 
<input type="text" name="ele_nom" id="nom" value=""required>
</p>
<p>
<label for="prenom">prenom: </label>
<input type="text" name="ele_prenom" id="prenom"  value=""required >
</p>
<p>
<label for="adresse">adresse: </label>
 <input type="text" name="ele_adresse" id="adresse" value=""required>
 </p>
 <p>
 <label for="code_postal">code postal: </label>
<input type="text" name="ele_codepostal" id="code_postal" value=""required>
</p>
<p>
<label for="ville">ville: </label>
<input type="text" name="ele_ville" id= "ville"value="" required>
</p>
<p>
    <label for="promotion"> promotion: </label>
<select name="ele_promotion" id="promotion" required>
    <option value="" selected>--choisir la promotion--</option>
    <option value="prepa">Prepa</option>
    <option value="tertiaires">Tertiaires</option>
    <option value="ifmk">IFMK</option>
</select>
</p>
<p>
<input type="submit" name="btsubmit" value="valider">
<input type="reset"  value="effacer">

</p> 
</body>
<footer>
    <?php require "../footer/footer.php"?>
</footer>

</html>