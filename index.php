<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/com&Pub.css">
    <title>LOGIN</title>
</head>
<body>
    
    <h1>LOGIN</h1>
    <form action="pages/load.php" method="POST">
        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="mdp" required><br><br>

        <input type="submit" value="Connexion">

         <a href="./pages/inscription.php">Pas de compte ?</a>
    </form>
     
</body>
</html>