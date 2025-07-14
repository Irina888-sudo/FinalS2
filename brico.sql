
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
('Peigne', 1, 1), ('Sèche-cheveux', 1, 1), ('Tondeuse', 1, 1), ('Brosse à cheveux', 1, 1),
('Lime à ongles', 1, 1), ('Miroir', 1, 1), ('Épilateur', 1, 1), ('Maquillage', 1, 1),
('Pince à épiler', 1, 1), ('Vernis', 1, 1),

-- Membre 2
('Marteau', 2, 2), ('Tournevis', 2, 2), ('Scie', 2, 2), ('Perceuse', 2, 2),
('Mètre ruban', 2, 2), ('Clou', 2, 2), ('Visseuse', 2, 2), ('Niveau', 2, 2),
('Pince', 2, 2), ('Cutter', 2, 2),

-- Membre 3
('Clé plate', 3, 3), ('Clé à molette', 3, 3), ('Pompe à vélo', 3, 3), ('Crics', 3, 3),
('Compresseur', 3, 3), ('Douille', 3, 3), ('Clé dynamométrique', 3, 3), ('Caisse outils', 3, 3),
('Tournevis magnétique', 3, 3), ('Roue de secours', 3, 3),

-- Membre 4
('Mixeur', 4, 4), ('Robot ménager', 4, 4), ('Fouet', 4, 4), ('Balance', 4, 4),
('Grille-pain', 4, 4), ('Micro-ondes', 4, 4), ('Couteau', 4, 4), ('Casserole', 4, 4),
('Poêle', 4, 4), ('Râpe', 4, 4);


INSERT INTO images_objet_56 (id_objet, nom_image) VALUES
(1, 'img1.jpg'), (2, 'img2.jpg'), (3, 'img3.jpg'), (4, 'img4.jpg'), (5, 'img5.jpg'),
(6, 'img6.jpg'), (7, 'img7.jpg'), (8, 'img8.jpg'), (9, 'img9.jpg'), (10, 'img10.jpg'),
(11, 'img11.jpg'), (12, 'img12.jpg'), (13, 'img13.jpg'), (14, 'img14.jpg'), (15, 'img15.jpg'),
(16, 'img16.jpg'), (17, 'img17.jpg'), (18, 'img18.jpg'), (19, 'img19.jpg'), (20, 'img20.jpg'),
(21, 'img21.jpg'), (22, 'img22.jpg'), (23, 'img23.jpg'), (24, 'img24.jpg'), (25, 'img25.jpg'),
(26, 'img26.jpg'), (27, 'img27.jpg'), (28, 'img28.jpg'), (29, 'img29.jpg'), (30, 'img30.jpg'),
(31, 'img31.jpg'), (32, 'img32.jpg'), (33, 'img33.jpg'), (34, 'img34.jpg'), (35, 'img35.jpg'),
(36, 'img36.jpg'), (37, 'img37.jpg'), (38, 'img38.jpg'), (39, 'img39.jpg'), (40, 'img40.jpg');


INSERT INTO emprunt_56 (id_objet, id_membre, date_emprunt, date_retour) VALUES
(5, 2, '2025-07-01', '2025-07-05'),
(12, 3, '2025-07-02', NULL),
(18, 1, '2025-07-03', '2025-07-04'),
(25, 4, '2025-07-04', NULL),
(32, 1, '2025-07-05', '2025-07-07'),
(8, 4, '2025-07-06', NULL),
(10, 3, '2025-07-07', NULL),
(20, 2, '2025-07-08', '2025-07-10'),
(27, 1, '2025-07-09', NULL),
(37, 3, '2025-07-10', NULL);




