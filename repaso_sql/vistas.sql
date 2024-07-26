CREATE DATABASE IF NOT EXISTS vistas;
USE vistas;

drop table if exists empleados;
drop table if exists secciones;

 create table secciones(
  codigo int auto_increment primary key,
  nombre varchar(30),
  sueldo decimal(5,2)
 );

 create table empleados(
  legajo int primary key auto_increment,
  documento char(8),
  sexo char(1),
  apellido varchar(40),
  nombre varchar(30),
  domicilio varchar(30),
  seccion int not null,
  cantidadhijos int,
  estadocivil char(10),
  fechaingreso date
 );

 insert into secciones(nombre,sueldo) values('Administracion', 300);
 insert into secciones(nombre,sueldo) values('Contaduría', 400);
 insert into secciones(nombre,sueldo) values('Sistemas', 500);

 insert into empleados (documento,sexo,apellido,nombre,domicilio,seccion,cantidadhijos,estadocivil,fechaingreso)
   values ('22222222','f','Lopez','Ana','Colon 123',1,2,'casado','2010-10-10');
 insert into empleados (documento,sexo,apellido,nombre,domicilio,seccion,cantidadhijos,estadocivil,fechaingreso)   
   values('23333333','m','Lopez','Luis','Sucre 235',1,0,'soltero','2010-02-10');
 insert into empleados (documento,sexo,apellido,nombre,domicilio,seccion,cantidadhijos,estadocivil,fechaingreso)
   values('24444444','m','Garcia','Marcos','Sarmiento 1234',2,3,'divorciado','2018-07-12');
 insert into empleados (documento,sexo,apellido,nombre,domicilio,seccion,cantidadhijos,estadocivil,fechaingreso)
   values('25555555','m','Gomez','Pablo','Bulnes 321',3,2,'casado','2018-10-09');
 insert into empleados (documento,sexo,apellido,nombre,domicilio,seccion,cantidadhijos,estadocivil,fechaingreso)
   values('26666666','f','Perez','Laura','Peru 1254',3,3,'casado','2019-05-09');
   
create view NOMBREVISTA as SENTENCIASSELECT from TABLA; 

create view vista_empleado as select concat(apellido, ' ', e.nombre) as nombre, sexo, s.nombre as seccion,
cantidadhijos from empleados as e join secciones as s on codigo=seccion;


select * from vista_empleado;

select seccion, count(*) as cantidad from vista_empleado group by seccion;

drop view if exists vista_empleado;
 
create view NOMBREVISTA (NOMBRESDEENCABEZADOS) as SETENCIASSELECT from TABLA;
create view vista_empleado_ingreso (fecingreso,cantidad) as select extract(year from fechaingreso) as
fecingreso, count(*) as cantidad from empleados group by fecingreso;

select * from vista_empleado_ingreso;
   
select * from TABLA;
   
drop view if exists NOMBREVISTA;


/*Vistas basadas en otras Vistas*/
select * from vista_empleado;

create view vista_empleado_con_hijos as select nombre, sexo, seccion, cantidadhijos
from vista_empleado where cantidadhijos>00;

select * from vista_empleado_con_hijos;



/*Vistas actualizables (insert-update)*/
drop table if exists alumnos;
drop table if exists profesores;
 
 create table alumnos(
  documento char(8),
  nombre varchar(30),
  nota decimal(4,2),
  codigoprofesor int,
  primary key(documento)
 );

 create table profesores (
   codigo int auto_increment,
   nombre varchar(30),
   primary key(codigo)
 );


 insert into alumnos values('30111111','Ana Algarbe', 5.1, 1);
 insert into alumnos values('30222222','Bernardo Bustamante', 3.2, 1);
 insert into alumnos values('30333333','Carolina Conte',4.5, 1);
 insert into alumnos values('30444444','Diana Dominguez',9.7, 1);
 insert into alumnos values('30555555','Fabian Fuentes',8.5, 2);
 insert into alumnos values('30666666','Gaston Gonzalez',9.70, 2);

 insert into profesores(nombre) values ('Yoselin Valdez');
 insert into profesores(nombre) values ('Luis Agromonte');
 
 select * from alumnos;
 
 
 create view vista_nota_alumnos_aprodabos as
 select documento,
 a.nombre as nombrealumno,
 p.nombre as nombreprofesor,
 nota,
 codigoprofesor from alumnos as a
 join profesores as p on a.codigoprofesor=p.codigo
 where nota>=7;
 
 select * from vista_nota_alumnos_aprodabos;
 
 insert into vista_nota_alumnos_aprodabos(documento, nombrealumno, nota, codigoprofesor)
 values('86876768', 'Juan Pablo', 10, 1);
 
  insert into vista_nota_alumnos_aprodabos(documento, nombrealumno, nota, codigoprofesor)
 values('86586932', 'Alejandro Martinez', 5, 1);
 
 update vista_nota_alumnos_aprodabos set nota=10 where documento='30444444';