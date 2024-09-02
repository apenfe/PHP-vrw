CREATE TABLE usuarios (
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(100),
    apellidos VARCHAR(255) DEFAULT "JIMENEZ",
    email VARCHAR(100),
    password VARCHAR(255)
);

DROP TABLE usuarios;