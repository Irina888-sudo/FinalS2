<?php
session_start();
include('../functions/dbconnect.php');
$nom_objet = $_GET['nom_objet'] ;
$_SESSION['nom_objet'] = $nom_objet;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
</head>
<body>
   
      <div class="register-card bg-white">
        <h1 class="text-center mb-4">Emprunter <?php echo$_SESSION['nom_objet'];?> </h1>
        <form action="./List.php" method="GET">
            <div class="mb-3">
                <label for="Day" class="form-label">Nombre de jour d'emprunt</label>
                <input type="number" class="form-control" id="Day" name="Day" required>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Okay</button>
            </div>
        </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

