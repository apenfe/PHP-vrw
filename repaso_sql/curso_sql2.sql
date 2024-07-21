# eliminar base de datos existente

drop database if exists curso_sql;

show databases;

create database if not exists curso_sql;
use curso_sql;

create table if not exists usuario(
nombre varchar(50),
apellido varchar(50),
correo varchar(100),
primary key(nombre)
);

describe usuario;

insert into usuario values('Juan','Perez','juanperez@gmail.es');
insert into usuario values('Juan','Lopez','juanperez@hotmail.es');

create table if not exists producto(
id int(11) auto_increment primary key,
producto varchar(50),
descripcion text,
precio float(11,2)
);

describe producto;

insert into producto values(null,'ordenador','un buen portatil',1300);
insert into producto values(null,'ZTE','un buen telefono',69);

select * from producto;

# truncate borra todos los registros de una tabla (delete es mas lento) el delete no borra los indices automaticos
truncate table producto;

# unsigned  numeros positivos
create table persona(
id integer unsigned not null primary key,
nombre varchar(50),
edad integer unsigned
);

describe persona;

insert into persona values(1,'lorenzo',23);

select * from persona;

#############################   TIPOS DE DATOS  #########################

# NUMERICOS
# ENTEROS

TINYINT -127 128 UNSIGNED #SI ESTA EN UNSIGNED EL VALOR POSITIVO SE DUPLICA
SMALLINT 
MEDIUMINT
INT o INTEGER
BIGINT

# DECIMALES
FLOAT (longitud total con decimales, cantidad de decimales)
DOUBLE
DECIMAL # no permite el redondeo

# CADENAS
CHAR 255 # hasta 255 caracteres
nombre char(100)

VARCHAR 255 - 65.535
nombre varchar(25)

BINARY y VARBINARY

TEXT

BLOB, TINYBLOB, MEDIUMBLOB y LONGBLOB

ENUM (PARA HACER CATEGORIAS DE DATOS)

SET (PARECIDO AL ENUN, PERO SE PUEDEN ELEGIR VARIAS DE LAS OPCIONES POSIBLES)

# FECHA
DATE (AAAA-MM-DD)

DATETIME (AAAA-MM-DD HH:MM:SS)

TIME (HH:MM:SS)

TIMESTAMP (AAAA-MM-DD o AA-MM-DD)

ON UPDATE CURRENT_TIMESTAMP (HACE QUE SE ACTUALIZE CADA VEZ QUE HAY CAMBIOS)

YEAR

create table if not exists libros(
id integer unsigned auto_increment primary key,
titulo varchar(40) not null,
editorial varchar(15),
autor varchar(30) default 'Desconocido',
precio decimal(5,2) unsigned not null,
cantidad integer unsigned not null
);

insert into libros (titulo,editorial,autor,precio,cantidad) values('C#','alguna','adrian',15.2,4);
insert into libros (titulo,editorial,precio,cantidad) values('C#','alguna',15.2,4);

select * from libros;