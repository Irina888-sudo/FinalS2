<?php
session_start();
include('../func/dbconnect.php');
$Email = $_POST['email'];
$Mot_de_passe = $_POST['mdp'];
$sql = "SELECT id_membre,email,mdp FROM membre WHERE email='$Email' AND mdp='$Mot_de_passe'";
$resultat = mysqli_query($bdd, $sql);
if ($donnees = mysqli_fetch_assoc($resultat)) {
    $_SESSION['id_membre'] = $donnees['id_membre'];
    header("Location:./membre/");
} else {
    header("Location:./?error=error_login");
}



