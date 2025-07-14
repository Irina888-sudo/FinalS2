<?php
session_start();
include('../functions/dbconnect.php');

$nom_objet=$_SESSION['nom_objet'];
$Day = $_GET['Day'] ;

$sql = "SELECT obj.nom_objet,emp.date_emprunt,emp.date_retour,cat.nom_categorie,img.id_objet
        FROM objet_56 obj
        JOIN images_objet_56 img ON obj.id_objet = img.id_objet
        JOIN categorie_objet_56 cat ON obj.id_categorie = cat.id_categorie
        JOIN emprunt_56 emp ON obj.id_objet = emp.id_objet
        JOIN membre_56 mem ON obj.id_membre = mem.id_membre
        WHERE obj.nom_objet = '$nom_objet'";

$resultat = mysqli_query($bdd, $sql);

$employes = [];
while ($ligne = mysqli_fetch_assoc($resultat)) {
     
    $employes[] = $ligne;
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employés du Département</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white">
                    <th scope="col">Nom objet</th>
                    <th scope="col">Disponibilite</th>
                    
                </tr>
        
                <tbody>
                    <?php
                    if ($employes) {
                        foreach ($employes as $employe) {
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($employe['nom_objet']); ?></td>
                           <td>Dans<?php echo $Day+1 ; ?>jours</td>
                        </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="3">Aucun element trouvé.</td>
                        </tr>
                    <?php
                    }
                    
                    mysqli_close($bdd);
                    ?>
                    <a href="../../index">Retour Login</a>
                </tbody>
            </table>