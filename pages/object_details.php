<?php
session_start();
include('../functions/dbconnect.php');
$id_objet = $_GET['id'] ;
$sql = "SELECT obj.nom_objet, cat.nom_categorie, obj.disponible
        FROM objet_56 obj
        JOIN categorie_objet_56 cat ON obj.id_categorie = cat.id_categorie
        WHERE obj.id_objet = '$id_objet'";
$result = mysqli_query($bdd, $sql);
$object = mysqli_fetch_assoc($result);