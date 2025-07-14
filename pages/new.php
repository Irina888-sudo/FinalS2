<?php
include('../functions/dbconnect.php');

if (isset($_POST['Nom']) && isset($_POST['Email']) && isset($_POST['Datedenaissance']) && isset($_POST['Motdepasse'])
     && isset($_POST['Ville']) && isset($_POST['Genre'])) {

    $Nom = $_POST['Nom'];
    $Email = $_POST['Email'];
    $Date_de_naissance = $_POST['Datedenaissance'];
    $Mot_de_passe = $_POST['Motdepasse'];
    $Ville = $_POST['Ville'];
    $Genre = $_POST['Genre'];


if (!empty($Nom) && !empty($Email) && !empty($Date_de_naissance) && !empty($Mot_de_passe) && !empty($Ville) && !empty($Genre)) 
    {   
    $sql_insert = "INSERT INTO membre_56 (nom, date_naissance, genre, email, ville, mdp)
                    VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
                  
    $sql_insert = sprintf($sql_insert, $Nom, $Date_de_naissance, $Genre, $Email, $Ville, $Mot_de_passe);
  echo $sql_insert;
    $result_insertion = mysqli_query($bdd, $sql_insert);
    }
}
    $sql = "SELECT * FROM membre_56";
    $resultat = mysqli_query($bdd, $sql);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        echo "<p>" . htmlspecialchars($donnees['Nom']) . "</p>"; 
        echo "<h1>Inscription réussie</h1>"; ?>
        <?php   header("Location:../index.php"); ?> 
        <?php
    } ?>
</body>
</html>

<?php
mysqli_free_result($resultat);
?>


