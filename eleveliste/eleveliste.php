<?php
$conn=mysqli_connect("localhost","root","","class_eleve");
if(!$conn){
   die("erreur".mysqli_connect_error()) ;
}
echo"connexion reussie";


$sql="select * from eleve ";
$result = mysqli_query($conn,$sql);
if ($result===false) {
    echo mysqli_error($conn);
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <nav>
            <?php require "../accueil/index.php"?>
        </nav>
    </head>
<body>

    </header>
    <!-- liens de navigation -->
    
    <!-- contenu principal -->
    <div id="main">
        <table>
        
            <thead>
                <tr>
                    <th>ele_id</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>adresse</th>
                    <th>code postal</th>
                    <th>ville</th>
                    <th>promotion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    
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
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- pied de page -->

</body>
<footer>
    <?php require "../footer/footer.php"?>
</footer>

</html>