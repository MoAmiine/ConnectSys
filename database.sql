CREATE TABLE User (
    id INT PRIMARY KEY,
    nome VARCHAR(100),
    mdp VARCHAR(100),
    date_inscription DATE
);
CREATE TABLE contact (
    id INT PRIMARY KEY,
    nom VARCHAR(100),
    telephone INT,
    email VARCHAR(100),
    adresse VARCHAR(255)
);


