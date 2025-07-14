<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>Upload de fichier</title>
 <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
    <h2>Uploader un fichier</h2>
        <form action="./traitement-upload.php" method="post" enctype="multipart/form-data">
            <label for="fichier">Choisir un fichier :</label>
            <input type="file" name="fichier" id="fichier" required>
            <br><br>
            <input type="submit" value="Uploader">
        </form>
          <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>






