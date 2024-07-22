drop database if exists curso_sql;

create database if not exists curso_sql;
use curso_sql;

create table if not exists productos(
id integer unsigned not null auto_increment,
nombre varchar(50),
proveedor varchar(50),
descripcion text,
precio decimal(5,2) unsigned,
cantidad smallint unsigned,
primary key(id)
);

insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Laptop HP','HP','Las mejores laptop',155.69,50);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Mouse','Logitech','Las mejores mouse',20.86,30);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Teclado','Logitech','Las mejores teclados',80.12,100);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Laptop DELL','Dell','Las mejores laptop',200.8,15);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Pantalla','HP','Las mejores Pantallas',155.69,50);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Impresora','HP','Las mejores Impresoras',155,70);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Camaras','logitech','Las mejores Camaras',500,20);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Xbox 360','Xbox Microsoft','Las mejores Consolas',103,10);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('PlayStation 4','Sony','Las mejores play',15.69,50);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Lenovo 310','Lenovo','Las mejores laptop',155.69,50);

#Columnas Calculadas
select nombre, precio, cantidad from productos;
select nombre, precio, cantidad, precio*cantidad as precio_total from productos;
select nombre, precio,precio*0.1 as descuento ,precio-(precio*0.1) as descontado from productos;

#Funciones de manejo de cadenas
select concat('Hola,',' ','como estas?');
select concat_ws('/','Miguel','Lopez','Martinez');
select length('Hola a todos');
select left('Buenas Noches',8);
select right('Buenas Tardes',10);
select ltrim('        Udemy     ');
select rtrim('      Udemy    ');
select trim('    Udemy    ');
select replace('xxx.udemy.com','x','w');
select repeat('SQL', 5);
select reverse('Hola');
select lower('Hola, CoMO EsTaN?');
select lcase('Hola, CoMO EsTaN?');
select upper('Hola, CoMO EsTaN?');
select ucase('hola amigos');

select concat_ws('/', nombre, precio) from productos;
select left(nombre, 5) from productos;
select lower(nombre), upper(descripcion) from productos;

#Funciones Matematicas
select nombre, precio from productos;
select ceiling(precio) from productos;
select floor(precio) from productos;
select mod(10, 3);
select mod(10, 2);
select power(2,3);
select round(20.60);
select round(20.12);

#Order By
select nombre, descripcion, precio, cantidad from productos order by nombre;
select nombre, precio, cantidad from productos order by nombre desc;
select nombre, precio, descripcion, cantidad from productos order by nombre asc, precio asc;

#Operadores Logicos

#and = "y"
#or = "y/o"
#xor "o"
#not = "not"

select * from productos;

select * from productos where (proveedor = 'HP') and (precio <= 200);
select * from productos where (proveedor = 'H') or (descripcion = 'Las mejores laptop');
select * from productos where (proveedor = 'HP') xor (precio <= 200);
select * from productos where not (proveedor = 'Logitech');

#Operadores Relacionales Between - in

select * from productos where precio>=100 and precio<=160;
select * from productos where not precio between 100 and 160;

select * from productos where proveedor = 'HP' or descripcion = 'La mejor laptop';
select * from productos where proveedor in('HP', 'La mejor laptop');


#Busqueda de patrones like- not like
select * from productos;
select * from productos where descripcion = 'laptop';
select * from productos where descripcion not like '%laptop%';
select * from productos where nombre not like 'laptop%';

#Patron de busqueda Regexp- not Regexp
select * from productos where proveedor regexp 'logi';
select * from productos where proveedor regexp '[p]';
select * from productos where proveedor regexp '[a-d]';
select * from productos where proveedor regexp '^D';
select * from productos where proveedor regexp 'o..i';
select * from productos where nombre regexp 'a.*a';

#Funcion count

select * from productos;
select count(*) from productos;

select count(*) from productos where proveedor = 'HP';
select count(*) from productos where descripcion like '%laptop%';

#Funciones de Agrupamientos

select sum(cantidad) from productos;
select sum(cantidad) from productos where proveedor = 'HP';

select max(precio) from productos;
select min(precio) from productos;
select min(precio) from productos where nombre like '%Laptop%';
select avg(precio) from productos where nombre like '%Laptop%';

#Funcion de Agrupamiento group by
create table visitantes(
  nombre varchar(30),
  edad tinyint unsigned,
  sexo char(1),
  domicilio varchar(30),
  ciudad varchar(20),
  telefono varchar(11),
  montocompra decimal (6,2) unsigned
 );

insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Susana Molina', 28,'f','Colon 123','Cordoba',null,45.50); 
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Marcela Mercado',36,'f','Avellaneda 345','Cordoba','4545454',0);
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Alberto Garcia',35,'m','Gral. Paz 123','Alta Gracia','03547123456',25); 
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Teresa Garcia',33,'f','Gral. Paz 123','Alta Gracia','03547123456',0);
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Roberto Perez',45,'m','Urquiza 335','Cordoba','4123456',33.20);
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Marina Torres',22,'f','Colon 222','Villa Dolores','03544112233',25);
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Julieta Gomez',24,'f','San Martin 333','Alta Gracia','03547121212',53.50);
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Roxana Lopez',20,'f','Triunvirato 345','Alta Gracia',null,0);
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Liliana Garcia',50,'f','Paso 999','Cordoba','4588778',48);
insert into visitantes (nombre,edad, sexo,domicilio,ciudad,telefono,montocompra)
  values ('Juan Torres',43,'m','Sarmiento 876','Cordoba','4988778',15.30);
  
select count(*) from visitantes where ciudad='Cordoba';
select count(*) from visitantes where ciudad = 'Alta Gracia';

select ciudad, count(*) from visitantes group by ciudad;

select sexo, sum(montocompra) from visitantes group by sexo;

select sexo, max(montocompra), min(montocompra) from visitantes group by sexo;

select ciudad, sexo, count(*) from visitantes group by ciudad, sexo;

select ciudad, count(*) from visitantes where ciudad<>'Cordoba' group by ciudad;

select ciudad, count(*) from visitantes group by ciudad asc;


#registros duplicados distinct

select * from productos;
select proveedor from productos;
select distinct proveedor from productos;

select distinct proveedor from productos group by proveedor asc;