CREATE DATABASE procedimientos;

USE procedimeintos;

CREATE TABLE cuadrados (
numero INT UNSIGNED,
cuadrado INT UNSIGNED
);

call calcular_cuadrados(1);
select * from cuadrados;