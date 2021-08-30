<?php
$conn=mysqli_connect("localhost","root","","class_eleve");
if(!$conn){
   die("erreur".mysqli_connect_error()) ;
}
echo"connexion reussie";


$sql="select * from eleve where ele_promotion='ifmk' ";
$result = mysqli_query($conn,$sql);
if ($result===false) {
    echo mysqli_error($conn);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <table>
        <tr>
        <th>id</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>ADRESSE</th>
        <th>CODEPOSTAL</th>
        <th>VILLE</th>
        <th>PROMOTION</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
        extract($row);
        ?>
        <tr>
        <td><?=$ele_id?></td>
        <td><?=$ele_nom?></td>
        <td><?=$ele_prenom?></td>
        <td><?=$ele_adresse?></td>
        <td><?=$ele_codepostal?></td>
        <td><?=$ele_ville?></td>
        <td><?=$ele_promotion?></td>
        </tr>
        <?php 
    }?>


    </table>
</body>
</html>