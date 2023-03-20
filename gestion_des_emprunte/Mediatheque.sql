CREATE TABLE Adherent(
    id_adherent INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    adresse VARCHAR(225) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telephone VARCHAR(50) NOT NULL,
    cin VARCHAR(10) NOT NULL,
    date_naissance date NOT NULL,
    type VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    date_inscription date NOT NULL,
    penalites VARCHAR(5) NOT NULL
);



CREATE TABLE Ouvrage (
    id_ouvrage INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titre VARCHAR(50) NOT NULL,
    nom_auteur VARCHAR(50) NOT NULL,
    image_couverture VARCHAR(225) NOT NULL,
    etat VARCHAR(225) NOT NULL,
    type VARCHAR(35) NOT NULL,
    date_edition date NOT NULL,
    date_achat date NOT NULL,
    nombre_pages VARCHAR(10) NOT NULL
);


CREATE TABLE Gerant(
    id_gerant INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL 
);


CREATE TABLE Reservation (
    id_reservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    date_reservation date NOT NULL,
    id_adherent INT NOT NULL,
    id_ouvrage INT NOT NULL,  
    FOREIGN KEY (id_adherent) REFERENCES Adherent(id_adherent),
    FOREIGN KEY (id_ouvrage) REFERENCES Ouvrage(id_ouvrage)
);


CREATE TABLE Emprunt (
    id_emprunt INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    date_emprunt date NOT NULL,
    date_retour date NOT NULL,
    id_reservation INT NOT NULL,
    id_gerant_validation INT NOT NULL,
    id_gerant_retour INT NOT NULL,  
    FOREIGN KEY (id_reservation) REFERENCES Reservation(id_reservation),
    FOREIGN KEY (id_gerant_validation) REFERENCES Gerant(id_gerant),
    FOREIGN KEY (id_gerant_retour) REFERENCES Gerant(id_gerant)
);