CREATE TABLE Clients (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    prenom VARCHAR(100)NOT NULL,
    date_de_naissance DATE NOT NULL,
    email VARCHAR(250) NOT NULL UNIQUE,
    telephone VARCHAR(15) NOT NULL UNIQUE
);

CREATE TABLE Type_Services (
    id_type_service INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(250) NOT NULL,
    category VARCHAR(250) NOT NULL
);

CREATE TABLE Services (
    id_service INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(250),
    img VARCHAR(2000),
    info TEXT(1000),
    duree DECIMAL(4,2),
    tarif DECIMAL(5,2),
    id_type_service INT NOT NULL UNIQUE,
    FOREIGN KEY (id_type_service) REFERENCES Type_Services(id_type_service)
);

CREATE TABLE Formulaire (
    id_formulaire INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    prenom VARCHAR(100)NOT NULL,
    telephone DECIMAL(13)NOT NULL UNIQUE,
    email VARCHAR(250) NOT NULL UNIQUE,
    message TEXT(500) NOT NULL,
    id_service INT NOT NULL UNIQUE,
    FOREIGN KEY (id_service) REFERENCES Services(id_service),
    id_client INT NOT NULL UNIQUE,
    FOREIGN KEY (id_client) REFERENCES Clients(id_client)
);

CREATE TABLE Cartes_Cadeaux (
    id_cartes_cadeaux INT AUTO_INCREMENT PRIMARY KEY,
    date_limit DATETIME NOT NULL,
    prenom VARCHAR(100)NOT NULL,
    id_service INT NOT NULL UNIQUE,
    FOREIGN KEY (id_service) REFERENCES Services(id_service),
    id_client INT NOT NULL UNIQUE,
    FOREIGN KEY (id_client) REFERENCES Clients(id_client)
);