
CREATE TABLE membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) ,
    date_naissance DATE ,
    genre ENUM('Homme', 'Femme', 'Autre') ,
    email VARCHAR(150) ,
    ville VARCHAR(100),
    mdp VARCHAR(255) ,
    image_profil VARCHAR(255)
);


CREATE TABLE categorie_objet (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100) 
);


CREATE TABLE objet (
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(100) ,
    id_categorie INT,
    id_membre INT,
);


CREATE TABLE images_objet (
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    nom_image VARCHAR(255) ,
   
);

CREATE TABLE emprunt (
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    id_membre INT,
    date_emprunt DATE ,
    date_retour DATE,
);


