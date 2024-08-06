create database pinta;

use pinta;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

create table produ(
    id_p int AUTO_INCREMENT PRIMARY KEY,
    nombre_del_producto varchar(50),
    precio int,
    Descripcion varchar(50)
);



INSERT INTO users (username, password) VALUES ('usuario1', 'contrasena1');
INSERT INTO users (username, password) VALUES ('usuario2', 'contrasena2');

