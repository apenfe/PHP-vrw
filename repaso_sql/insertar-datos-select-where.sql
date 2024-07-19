use curso_sql;

create table alumnos(
nombre varchar(50),
apellidos varchar(50),
direccion varchar(100),
telefono varchar(15),
edad int(11)
);

insert into alumnos(nombre, apellidos, direccion, telefono, edad) value('Juan','Martínez','Barrio Duarte','934342411',45);
insert into alumnos(nombre, apellidos, direccion, telefono, edad) value('Juan','Lopez','Barrio Donostia','334342411',35);
insert into alumnos values('Adrian','Gomez','Barrio Gil','934742411',25);

insert into alumnos(nombre,telefono,edad) values('miguel','968342411',36);

select * from alumnos;
select nombre, direccion from alumnos;
select edad, apellidos from alumnos;

select * from alumnos where nombre = 'Juan';
select * from alumnos where nombre = 'Alex';
select nombre, edad from alumnos where nombre = 'Juan';