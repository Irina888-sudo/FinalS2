<?php
include('../functions/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/inscription.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="new.php" method="POST">
        <label for="Email">Email:</label>
        <input type="text" name="Email" required><br><br>

        <label for="Motdepasse">Mot de passe:</label>
        <input type="password" name="Motdepasse" required><br><br>

        <label for="Nom">Nom:</label>
        <input type="text" name="Nom" required><br><br>

        <label for="Datedenaissance">Date de naissance:</label>
        <input type="date" name="Datedenaissance" required><br><br>

        <label for="Ville">Ville:</label>
        <input type="ville" name="Ville" required><br><br>

        <label for="Genre">Genre</label>
        <input type="genre" name="Genre" required><br><br>

        <input type="submit" value="S'inscrire">
        <p><a href="../index.php"> login</a>
    </form>
    
</body>
</html>


