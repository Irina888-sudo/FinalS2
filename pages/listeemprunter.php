
<?php
session_start();
include('../functions/dbconnect.php');

$email = $_SESSION['email'] ?? '';
$id_membre = $_SESSION['id_membre'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nom_objet']) && isset($_GET['Day'])) {
    $nom_objet = mysqli_real_escape_string($bdd, $_GET['nom_objet']);
    $days = (int)$_GET['Day'];

   
    $sql_obj = "SELECT id_objet FROM objet_56 WHERE nom_objet = '$nom_objet' AND disponible = 1";
    $result_obj = mysqli_query($bdd, $sql_obj);
    if ($obj = mysqli_fetch_assoc($result_obj)) {
        $id_objet = $obj['id_objet'];
        $date_emprunt = date('Y-m-d');
        $date_retour = date('Y-m-d', strtotime("+$days days"));


        $sql_borrow = "INSERT INTO emprunt_56 (id_objet, id_membre, date_emprunt, date_retour) 
                       VALUES ('$id_objet', '$id_membre', '$date_emprunt', '$date_retour')";
        mysqli_query($bdd, $sql_borrow);

    
        $sql_update = "UPDATE objet_56 SET disponible = 0 WHERE id_objet = '$id_objet'";
        mysqli_query($bdd, $sql_update);
    }
}


$sql = "SELECT obj.id_objet, obj.nom_objet, cat.nom_categorie, emp.date_emprunt, emp.date_retour
        FROM emprunt_56 emp
        JOIN objet_56 obj ON emp.id_objet = obj.id_objet
        JOIN categorie_objet_56 cat ON obj.id_categorie = cat.id_categorie
        JOIN membre_56 mem ON emp.id_membre = mem.id_membre
        WHERE mem.email = '$email'
        ORDER BY emp.date_emprunt DESC";
$resultat = mysqli_query($bdd, $sql);
$borrowings = [];
while ($row = mysqli_fetch_assoc($resultat)) {
    $borrowings[] = $row;
}

mysqli_free_result($resultat);
mysqli_close($bdd);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Emprunts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .borrow-card { transition: transform 0.2s; }
        .borrow-card:hover { transform: scale(1.02); }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Mes Emprunts</h1>

        <!-- Borrowing List -->
        <div class="row">
            <?php if ($borrowings): ?>
                <?php foreach ($borrowings as $borrowing): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card borrow-card">
                            <img src="<?php echo htmlspecialchars($borrowing['image_path']); ?>" class="card-img-top" alt="Objet" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($borrowing['nom_objet']); ?></h5>
                                <p class="card-text">Catégorie: <?php echo htmlspecialchars($borrowing['nom_categorie']); ?></p>
                                <p class="card-text">Emprunté le: <?php echo htmlspecialchars($borrowing['date_emprunt']); ?></p>
                                <p class="card-text">Retour prévu: <?php echo htmlspecialchars($borrowing['date_retour'] ?: 'Non retourné'); ?></p>
                                <a href="object_details.php?id=<?php echo $borrowing['id_objet']; ?>" class="btn btn-primary">Voir détails</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info">Aucun emprunt trouvé.</div>
            <?php endif; ?>
        </div>

        <div class="text-center mt-4">
            <a href="ListOb.php" class="btn btn-secondary">Retour à la liste des objets</a>
            <a href="profile.php" class="btn btn-info">Voir mon profil</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
mysqli_close($bdd);
?>