/*Creamos la Base de Datos.*/
CREATE DATABASE IF NOT EXISTS subconsultas;
USE subconsultas;

CREATE TABLE IF NOT EXISTS libros(
  codigo int auto_increment,
  titulo varchar(40),
  autor varchar(30),
  editorial varchar(20),
  precio decimal(5,2),
  primary key(codigo)
);

insert into libros(titulo,autor,editorial,precio) 
  values('Alicia en el pais de las maravillas','Lewis Carroll','Emece',20.00);
 insert into libros(titulo,autor,editorial,precio)
  values('Alicia en el pais de las maravillas','Lewis Carroll','Plaza',35.00);
 insert into libros(titulo,autor,editorial,precio)
  values('Aprenda PHP','Mario Molina','Siglo XXI',40.00);
 insert into libros(titulo,autor,editorial,precio)
  values('El aleph','Borges','Emece',10.00);
 insert into libros(titulo,autor,editorial,precio)
  values('Ilusiones','Richard Bach','Planeta',15.00);
 insert into libros(titulo,autor,editorial,precio)
  values('Java en 10 minutos','Mario Molina','Siglo XXI',50.00);
 insert into libros(titulo,autor,editorial,precio)
  values('Martin Fierro','Jose Hernandez','Planeta',20.00);
 insert into libros(titulo,autor,editorial,precio)
  values('Martin Fierro','Jose Hernandez','Emece',30.00);
 insert into libros(titulo,autor,editorial,precio)
  values('Uno','Richard Bach','Planeta',10.00);
  
/*Sintaxis básica Subconsultas*/
/*select CAMPOS from TABLA where CAMPO OPERADOR(SUBCONSULTA);*/
/*select CAMPO OPERADOR(SUBCONSULTA) from TABLA;*/

select titulo, precio, precio-(select max(precio) from libros) as diferencia from libros where titulo='uno';
select titulo, autor, precio from libros where precio=(select max(precio) from libros);

/*SubConsultas con in and not in*/

drop table if exists editoriales;
drop table if exists libros;

 create table editoriales(
  codigo int auto_increment,
  nombre varchar(30),
  primary key (codigo)
 );
 
 create table libros (
  codigo int auto_increment,
  titulo varchar(40),
  autor varchar(30),
  codigoeditorial smallint,
  primary key(codigo)
 );

 insert into editoriales(nombre) values('Planeta');
 insert into editoriales(nombre) values('Emece');
 insert into editoriales(nombre) values('Paidos');
 insert into editoriales(nombre) values('Siglo XXI');

 insert into libros(titulo,autor,codigoeditorial) values('Uno','Richard Bach',1);
 insert into libros(titulo,autor,codigoeditorial) values('Ilusiones','Richard Bach',1);
 insert into libros(titulo,autor,codigoeditorial) values('Aprenda PHP','Mario Molina',4);
 insert into libros(titulo,autor,codigoeditorial) values('El aleph','Borges',2);
 insert into libros(titulo,autor,codigoeditorial) values('Puente al infinito','Richard Bach',2);
 
 select nombre from editoriales where codigo in (select codigoeditorial from libros where autor='Richard Bach');
 
 select codigoeditorial from libros where autor='Richard Bach'; 
  
 select distinct nombre from editoriales as e join libros on codigoeditorial=e.codigo where autor='Richard Bach';
 
 select nombre from editoriales where codigo not in (select codigoeditorial from libros where autor='Richard Bach');
 
 /*SubConsultas any-some-all*/
 
 drop table if exists editoriales;
 drop table if exists libros;
 
 create table editoriales(
  codigo int auto_increment,
  nombre varchar(30),
  primary key (codigo)
 );
 
 create table libros (
  codigo int auto_increment,
  titulo varchar(40),
  autor varchar(30),
  codigoeditorial smallint,
  precio decimal(5,2),
  primary key(codigo)
 );

 insert into editoriales(nombre) values('Planeta');
 insert into editoriales(nombre) values('Emece');
 insert into editoriales(nombre) values('Paidos');
 insert into editoriales(nombre) values('Siglo XXI');

 insert into libros(titulo,autor,codigoeditorial,precio) values('Uno','Richard Bach',1,15);
 insert into libros(titulo,autor,codigoeditorial,precio) values('Ilusiones','Richard Bach',4,18);
 insert into libros(titulo,autor,codigoeditorial,precio) values('Puente al infinito','Richard Bach',2,20);
 insert into libros(titulo,autor,codigoeditorial,precio) values('Aprenda PHP','Mario Molina',4,40);
 insert into libros(titulo,autor,codigoeditorial,precio) values('El aleph','Borges',2,10);
 insert into libros(titulo,autor,codigoeditorial,precio) values('Antología','Borges',1,20);
 insert into libros(titulo,autor,codigoeditorial,precio) values('Cervantes y el quijote','Borges',3,25);
 
  select titulo from libros where autor='Borges' and codigoeditorial = any 
 (select e.codigo from editoriales as e join libros as l on codigoeditorial=e.codigo where l.autor='Richard Bach');
 
 select titulo from libros where autor='Borges' and codigoeditorial = all
 (select e.codigo from editoriales as e join libros as l on codigoeditorial=e.codigo where l.autor='Richard Bach');
 
 select titulo, precio from libros where autor='Borges' and precio > any
 (select precio from libros where autor = 'Richard Bach');
 
/*SubConsultas Exists not Exists*/

drop table if exists facturas;
drop table if exists detalles;
 
 create table facturas(
  numero int not null,
  fecha date,
  cliente varchar(30),
  primary key(numero)
 );

 create table detalles(
  numerofactura int not null,
  numeroitem int not null, 
  articulo varchar(30),
  precio decimal(5,2),
  cantidad int,
  primary key(numerofactura,numeroitem)
 );

 insert into facturas values(1200,'2019-01-15','Juan Lopez');
 insert into facturas values(1201,'2012-01-15','Luis Torres');
 insert into facturas values(1202,'2019-01-15','Ana Garcia');
 insert into facturas values(1300,'2019-01-20','Juan Lopez');

 insert into detalles values(1200,1,'lapiz',1,100);
 insert into detalles values(1200,2,'goma',0.5,150);
 insert into detalles values(1201,1,'regla',1.5,80);
 insert into detalles values(1201,2,'goma',0.5,200);
 insert into detalles values(1201,3,'cuaderno',4,90);
 insert into detalles values(1202,1,'lapiz',1,200);
 insert into detalles values(1202,2,'escuadra',2,100);
 insert into detalles values(1300,1,'lapiz',1,300);
 
 select cliente, numero from facturas as f where exists
 (select * from detalles as d where f.numero=d.numerofactura and d.articulo='lapiz');
 
   select cliente, numero from facturas as f where  not exists
 (select * from detalles as d where f.numero=d.numerofactura and d.articulo='lapiz');
 
 
 /*SubConsulta update-delete*/
 
 drop table if exists editoriales;
 drop table if exists libros;
 
 create table editoriales(
  codigo int auto_increment,
  nombre varchar(30),
  primary key (codigo)
 );
 
 create table libros (
  codigo int auto_increment,
  titulo varchar(40),
  autor varchar(30),
  codigoeditorial smallint,
  precio decimal(5,2),
  primary key(codigo)
 );

 insert into editoriales(nombre) values('Planeta');
 insert into editoriales(nombre) values('Emece');
 insert into editoriales(nombre) values('Paidos');
 insert into editoriales(nombre) values('Siglo XXI');

 insert into libros(titulo,autor,codigoeditorial,precio) 
   values('Uno','Richard Bach',1,15);
 insert into libros(titulo,autor,codigoeditorial,precio)
   values('Ilusiones','Richard Bach',2,20);
 insert into libros(titulo,autor,codigoeditorial,precio)
   values('El aleph','Borges',3,10);
 insert into libros(titulo,autor,codigoeditorial,precio)
   values('Aprenda PHP','Mario Molina',4,40);
 insert into libros(titulo,autor,codigoeditorial,precio)
   values('Poemas','Juan Perez',1,20);
 insert into libros(titulo,autor,codigoeditorial,precio)
   values('Cuentos','Juan Perez',3,25);
 insert into libros(titulo,autor,codigoeditorial,precio)
   values('Java en 10 minutos','Marcelo Perez',2,30);
   
   update TABLA set CAMPO=NUEVOVALOR where CAMPO =(SUBCONSULTA);
   
   select * from libros;
   
   update libros set precio=precio+(precio*0.1) where codigoeditorial = (select codigo from editoriales where nombre='emece');
   
   delete from TABLA where CAMPO = (SUBCONSULTA);
   
   delete from libros where codigoeditorial = (select e.codigo from editoriales as e where nombre ='Planeta');