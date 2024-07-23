drop database if exists curso_sql;

create database if not exists curso_sql;

use curso_sql;

#Indice

#Primary
#index
#unique

#show index;

#indice Primary
create table if not exists libro(
id int unsigned auto_increment not null,
titulo varchar(100),
autor varchar(50),
descripcion text,
editorial varchar(15),
primary key(id)
);

show index from libro;
drop table libros;

#tipo index comun
create table if not exists libros(
id int unsigned auto_increment not null,
titulo varchar(100),
autor varchar(50) not null,
descripcion text,
editorial varchar(15) not null,
primary key(id),
index i_autoreditorial (autor, editorial)
);

#tipo unique (unico)
create table if not exists libros(
id int unsigned auto_increment not null,
titulo varchar(100) unique,
autor varchar(50) not null,
descripcion text,
editorial varchar(15) not null,
primary key(id)
);
show index from libros;

insert into libros(titulo, autor, editorial) values('Java en 10 minutos', 'Alejandro', 'La Maravilla');
insert into libros(titulo, autor, editorial) values('Java', 'Alejandro', 'La Maravilla');

#Eliminar un indice
drop index i_autor on libros;
drop index uq_titulo on libros;

create index i_editorial on libros (editorial);
create unique index uq_titulo on libros (titulo);

select * from libros;