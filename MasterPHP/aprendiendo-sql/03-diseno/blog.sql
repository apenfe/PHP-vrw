-- Active: 1724683526175@@127.0.0.1@3306@blog_master
CREATE TABLE usuarios (
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
) ENGINE = InnoDb;

CREATE TABLE categorias (
    id int(255) AUTO_INCREMENT not null,
    nombre VARCHAR(100),
    CONSTRAINT pk_categorias PRIMARY KEY (id)
) ENGINE = InnoDb;

create table entradas (
    id int(255) AUTO_INCREMENT NOT NULL,
    usuario_id int(255) not null,
    categoria_id int(255) not null,
    titulo VARCHAR(255) not null,
    descripcion MEDIUMINT,
    fecha date not null,
    CONSTRAINT pk_entradas PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios (id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias (id)
) ENGINE = InnoDb;