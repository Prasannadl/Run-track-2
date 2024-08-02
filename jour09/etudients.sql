USE my_database;

CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    naissance DATE,
    sexe ENUM('Homme', 'Femme'),
    email VARCHAR(255)
);
