<?php
include('../functions/dbconnect.php');
session_start();

$Email = $_SESSION['email'] ;
$sql = "SELECT obj.nom_objet,emp.date_emprunt,emp.date_retour,cat.nom_categorie,img.id_objet
        FROM objet_56 obj
        JOIN images_objet_56 img ON obj.id_objet = img.id_objet
        JOIN categorie_objet_56 cat ON obj.id_categorie = cat.id_categorie
        JOIN emprunt_56 emp ON obj.id_objet = emp.id_objet
        JOIN membre_56 mem ON obj.id_membre = mem.id_membre
        WHERE mem.email = '$Email'";

    $sql_images = "SELECT * FROM images_objet_56 WHERE id_objet = 1";
    $result_img = mysqli_query($bdd, $sql_images);
    $image = mysqli_fetch_assoc($result_img) ?: ['path' => '../../assets/images/1.jpg'];
      
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
                    <th scope="col">Date emprunt</th>
                    <th scope="col">Date de retour</th>
                    
                </tr>
        
                <tbody>
                    <?php
                    if ($employes) {
                        foreach ($employes as $employe) {
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($employe['nom_objet']); ?></td>
                            <td><?php echo htmlspecialchars($employe['date_emprunt']); ?></td>
                            <td><?php echo htmlspecialchars($employe['date_retour']); ?></td>
                            
                        </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="3">Aucun employé trouvé.</td>
                        </tr>
                    <?php
                    }
                    mysqli_close($bdd);
                    ?>
                </tbody>
            </table>

            <br>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white">
            
                   <th scope="col">esthétique</th>
                    <th scope="col">bricolage</th>
                    <th scope="col">mécanique</th>
                     <th scope="col">cuisine</th>
                   
                    
                </tr>
        
                <tbody>
                   <?php if ($employes): ?>
    <?php foreach ($employes as $employe): ?>
        <tr>
            <td>
                <?php if ($employe['nom_categorie'] == 'esthétique'): ?>
                    <?= htmlspecialchars($employe['nom_objet']) ?>
                     <a href="../emprunt.php?nom_objet=<?= htmlspecialchars ($employe['nom_objet']) ?>" class="btn btn-primary">Emprunter</a>
                <?php endif; ?>
            </td>
            <td>
                <?php if ($employe['nom_categorie'] == 'bricolage'): ?>
                    <?= htmlspecialchars($employe['nom_objet']) ?>
                     <a href="../emprunt.php?nom_objet=<?= htmlspecialchars ($employe['nom_objet']) ?>" class="btn btn-primary">Emprunter</a>
        
                    
                <?php endif; ?>
            </td>
            <td>
                <?php if ($employe['nom_categorie'] == 'mécanique'): ?>
                    <?= htmlspecialchars($employe['nom_objet']) ?>
                     <a href="../emprunt.php?nom_objet=<?= htmlspecialchars ($employe['nom_objet']) ?>" class="btn btn-primary">Emprunter</a>
                  
                <?php endif; ?>
            </td>
            <td>
                <?php if ($employe['nom_categorie'] == 'cuisine'): ?>
                    <?= htmlspecialchars($employe['nom_objet']) ?>
                     <a href="../emprunt.php?nom_objet=<?= htmlspecialchars ($employe['nom_objet']) ?>" class="btn btn-primary">Emprunter</a>
                  
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="4">Aucun objet emprunté trouvé.</td></tr>
<?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="../../index.php">Retour login </a>
    <br>
    <br>
    <a href="../upload.php">Upload image</a>

    <div class="row">
            <?php if ($employes): ?>
                <?php foreach ($employes as $employe): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card object-card">
    <img src="<?= htmlspecialchars($image['path']) ?>" class="card-img-top" ">
    
    <div class="card-body">
        <h5 class="card-title"><?= htmlspecialchars($employe['nom_objet']) ?></h5>
        <p class="card-text">Catégorie : <?= htmlspecialchars($employe['nom_categorie']) ?></p>
        <a href="../object_details.php?id=<?= $employe['id_objet'] ?>" class="btn btn-primary">Voir détails</a>
    </div>
</div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info">Aucun objet trouvé.</div>
            <?php endif; ?>
        </div>
   
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>


