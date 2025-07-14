<?php
session_start();
include('../functions/dbconnect.php');
$id_objet = $_GET['id'] ;
$sql = "SELECT obj.nom_objet, cat.nom_categorie
        FROM objet_56 obj
        JOIN categorie_objet_56 cat ON obj.id_categorie = cat.id_categorie
        WHERE obj.id_objet = '$id_objet'";
$result = mysqli_query($bdd, $sql);
$object = mysqli_fetch_assoc($result);

$sql_images = "SELECT * FROM images_objet_56 WHERE id_objet = '$id_objet'";
$result_images = mysqli_query($bdd, $sql_images);
$images = [];
while ($image = mysqli_fetch_assoc($result_images)) {
    $images[] = $image;
}
$image['path1'] = $image['path'] ?? '../../assets/images/1.jpg'; 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'objet</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Détails de l'objet : <?php echo htmlspecialchars($object['nom_objet']); ?></h1>
        <h2>Catégorie : <?php echo htmlspecialchars($object['nom_categorie']); ?></h2>
        <h3></h3>

        <div class="row">
            <?php foreach ($images as $image): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo htmlspecialchars($image['path1']); ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="./ListOb.php" class="btn btn-primary">Retour à la liste des objets</a>
    </div>