-- Création de la table "rooms" pour stocker les informations sur les salles de réunion
CREATE TABLE rooms (
    ID_rooms INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    capaciter INT NOT NULL
);

-- Création de la table "reservations" pour stocker les informations sur les réservations
CREATE TABLE reservations (
    ID_reservations INT PRIMARY KEY AUTO_INCREMENT,
    room_id INT NOT NULL,
    heure_arriver DATETIME NOT NULL,
    heure_depart DATETIME NOT NULL,
    utilisateurs_ID INT NOT NULL,
    FOREIGN KEY (room_id) REFERENCES rooms(id),
    FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs(id)
);

-- Création de la table "users" pour stocker les informations sur les utilisateurs 
CREATE TABLE utilisateurs (
   ID_utilisateurs INT PRIMARY KEY AUTO_INCREMENT,
   nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);