
CREATE TABLE membre_56 (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) ,
    date_naissance DATE ,
    genre ENUM('Homme', 'Femme', 'Autre') ,
    email VARCHAR(150) ,
    ville VARCHAR(100),
    mdp VARCHAR(255) ,
    image_profil VARCHAR(255)
);


CREATE TABLE categorie_objet_56 (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100) 
);


CREATE TABLE objet_56 (
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(100) ,
    id_categorie INT,
    id_membre INT
);


CREATE TABLE images_objet_56 (
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    nom_image VARCHAR(255) 
   
);

CREATE TABLE emprunt_56 (
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    id_membre INT,
    date_emprunt DATE ,
    date_retour DATE
);


INSERT INTO categorie_objet_56 (nom_categorie) VALUES
('esthétique'),
('bricolage'),
('mécanique'),
('cuisine');



INSERT INTO objet_56 (nom_objet, id_categorie, id_membre) VALUES

-- Membre 1 
('Peigne', 1, 1),
('Marteau', 2, 1),
('Clé plate', 3, 1),
('Mixeur', 4, 1),
('Miroir', 1, 1),
('Tournevis', 2, 1),
('Pompe à vélo', 3, 1),
('Grille-pain', 4, 1),
('Tondeuse', 1, 1),
('Casserole', 4, 1),

-- Membre 2
('Brosse à cheveux', 1, 2),
('Scie', 2, 2),
('Crics', 3, 2),
('Robot ménager', 4, 2),
('Lime à ongles', 1, 2),
('Perceuse', 2, 2),
('Compresseur', 3, 2),
('Micro-ondes', 4, 2),
('Épilateur', 1, 2),
('Poêle', 4, 2),

-- Membre 3
('Sèche-cheveux', 1, 3),
('Tournevis magnétique', 2, 3),
('Douille', 3, 3),
('Balance', 4, 3),
('Maquillage', 1, 3),
('Cutter', 2, 3),
('Clé dynamométrique', 3, 3),
('Fouet', 4, 3),
('Vernis', 1, 3),
('Râpe', 4, 3),

-- Membre 4
('Pince à épiler', 1, 4),
('Clou', 2, 4),
('Caisse outils', 3, 4),
('Couteau', 4, 4),
('Mètre ruban', 2, 4),
('Pince', 2, 4),
('Roue de secours', 3, 4),
('Éponge', 4, 4),
('Brosse', 1, 4),
('Spatule', 4, 4);

INSERT INTO images_objet_56 (id_objet, nom_image) VALUES
(1, '1.jpg'), (2, '2.jpg'), (3, '3.jpg'), (4, '4.jpg'), (5, '5.jpg'),
(6, '6.jpg'), (7, '7.jpg'), (8, '8.jpg'), (9, '9.jpg'), (10, '10.jpg'),
(11, '11.jpg'), (12, '12.jpg'), (13, '13.jpg'), (14, '14.jpg'), (15, '15.jpg'),
(16, '16.jpg'), (17, '17.jpg'), (18, '18.jpg'), (19, '19.jpg'), (20, '20.jpg'),
(21, '21.jpg'), (22, '22.jpg'), (23, '23.jpg'), (24, '24.jpg'), (25, '25.jpg'),
(26, '26.jpg'), (27, '27.jpg'), (28, '28.jpg'), (29, '29.jpg'), (30, '30.jpg'),
(31, '31.jpg'), (32, '32.jpg'), (33, '33.jpg'), (34, '34.jpg'), (35, '35.jpg'),
(36, '36.jpg'), (37, '37.jpg'), (38, '38.jpg'), (39, '39.jpg'), (40, '40.jpg');


INSERT INTO emprunt_56 (id_objet, id_membre, date_emprunt, date_retour) VALUES

(11, 1, '2025-07-01', '2025-07-05'),
(12, 1, '2025-07-02', '2025-07-03'),
(13, 1, '2025-07-03', '2025-07-04'),
(14, 1, '2025-07-04', '2025-07-05'),
(15, 1, '2025-07-05', '2025-07-07'),
(16, 1, '2025-07-06','2025-07-05'),
(17, 1, '2025-07-07', '2025-07-05'),
(18, 1, '2025-07-08', '2025-07-10'),
(19, 1, '2025-07-09', '2025-07-05'),
(20, 1, '2025-07-10', '2025-07-05'),


(1, 2, '2025-07-01', '2025-07-05'),
(2, 2, '2025-07-02', '2025-07-05'),
(3, 2, '2025-07-03', '2025-07-04'),
(4, 2, '2025-07-04', '2025-07-05'),
(5, 2, '2025-07-05', '2025-07-07'),
(6, 2, '2025-07-06', '2025-07-05'),
(7, 2, '2025-07-07', '2025-07-05'),
(8, 2, '2025-07-08', '2025-07-10'),
(9, 2, '2025-07-09', '2025-07-05'),
(10, 2, '2025-07-10', '2025-07-05'),

-- Emprunts du membre 3
(21, 3, '2025-07-01', '2025-07-05'),
(22, 3, '2025-07-02', '2025-07-05'),
(23, 3, '2025-07-03', '2025-07-04'),
(24, 3, '2025-07-04', '2025-07-05'),
(25, 3, '2025-07-05', '2025-07-07'),
(26, 3, '2025-07-06', '2025-07-05'),
(27, 3, '2025-07-07', '2025-07-05'),
(28, 3, '2025-07-08', '2025-07-10'),
(29, 3, '2025-07-09', '2025-07-05'),
(30, 3, '2025-07-10', '2025-07-05'),

-- Emprunts du membre 4 
(31, 4, '2025-07-01', '2025-07-05'),
(32, 4, '2025-07-02', '2025-07-05'),
(33, 4, '2025-07-03', '2025-07-04'),
(34, 4, '2025-07-04', '2025-07-05'),
(35, 4, '2025-07-05', '2025-07-07'),
(36, 4, '2025-07-06', '2025-07-05'),
(37, 4, '2025-07-07', '2025-07-05'),
(38, 4, '2025-07-08', '2025-07-10'),
(39, 4, '2025-07-09', '2025-07-05'),
(40, 4, '2025-07-10', '2025-07-05');





