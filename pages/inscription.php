<?php
include('../functions/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../../assets/css/inscription.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
    </style>
</head>
<body>
    <div class="register-card bg-white">
        <h1 class="text-center mb-4">Inscription</h1>
        <form action="new.php" method="POST">
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="Email" required>
            </div>
            <div class="mb-3">
                <label for="Motdepasse" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="Motdepasse" name="Motdepasse" required>
            </div>
            <div class="mb-3">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="Nom" required>
            </div>
            <div class="mb-3">
                <label for="Datedenaissance" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="Datedenaissance" name="Datedenaissance" required>
            </div>
            <div class="mb-3">
                <label for="Ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="Ville" name="Ville" required>
            </div>
            <div class="mb-3">
                <label for="Genre" class="form-label">Genre</label>
                <select class="form-select" id="Genre" name="Genre" required>
                    <option value="" disabled selected>Sélectionnez votre genre</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
            <div class="text-center">
                <a href="../index.php" class="link-primary">Déjà un compte ? Connectez-vous</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
