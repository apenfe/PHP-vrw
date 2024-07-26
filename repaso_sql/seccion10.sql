drop database if exists curso_sql;
create database if not exists curso_sql;
use curso_sql;

show tables;

drop table productos;

create table if not exists productos(
id int unsigned not null auto_increment,
nombre varchar(50) not null,
descripcion text,
proveedorid int unsigned not null,
precio decimal(5,2),
cantidad smallint unsigned default 0,
primary key(id),
unique index (nombre),
foreign key(proveedorid) references proveedor(id)
);
describe productos;

select * from productos;

drop table if exists proveedor;

create table if not exists proveedor(
id int unsigned not null auto_increment,
nombre varchar(50),
primary key(id),
unique index (nombre)
);

select * from proveedor;

insert into proveedor (nombre) values('Lenovo');
insert into proveedor (nombre) values('Logitech');
insert into proveedor (nombre) values('Microsoft'); 
insert into proveedor (nombre) values('HP');

insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Lenovo 310', 'La mejor laptop', 1, 100, 50);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Mouse', 'mouse inalambrico', 2, 15.96, 5);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Office 360', 'Paquete de Ofice', 3, 150.69, 30);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('HP Y700', 'La mejor laptop del mercado', 4, 10, 15);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Alfombra Lenovo', 'Alfombras asombrosas', 1, 300, 40);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('laptop HP 1000', 'No funciona muy bien',4 , 500, 3);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Volante Gamer', 'El mejor volante para jugar', 2, 800, 5);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Disco duro', 'Obten mas capacidad', 3, 70, 80);

#Estructura del Join basico
select * from productos
join proveedor
on productos.proveedorid=proveedor.id;

#Estructura del Join para saber el nombre del proveedor
select p.nombre, p.descripcion, p.precio, pro.nombre from productos as p
join proveedor as pro
on p.proveedorid=pro.id;

#Left Join
select * from proveedor
left join productos
on proveedor.id=productos.proveedorid;

#Right join
select * from proveedor
right join productos
on proveedor.id=productos.proveedorid;

#Inner Join
select p.nombre, p.descripcion, p.precio, pro.nombre from proveedor as pro
inner join productos as p
on pro.id=p.proveedorid;

#Straight join
select p.nombre, p.descripcion, p.precio, pro.nombre from proveedor as pro
straight_join productos as p
on pro.id=p.proveedorid;

#Funciones de agrupamiento group by


select pro.nombre, count(p.proveedorid) as 'Cantidad de Productos'
from proveedor as pro
join productos as p
on pro.id=p.proveedorid
group by pro.nombre;

select pro.nombre, max(p.precio) as 'Mayor Precio'
from proveedor as pro
left join productos as p
on p.proveedorid=pro.id
group by pro.nombre;

select p.nombre, descripcion, precio, proveedorid from productos as p
join proveedor as pro
on p.proveedorid=pro.id;

#Trabajando con mas de dos tablas
 drop table if exists libros, socios, prestamos;
 
 create table libros(
  codigo int unsigned auto_increment,
  titulo varchar(40) not null,
  autor varchar(20) default 'Desconocido',
  primary key (codigo)
 );

 create table socios(
  documento char(8) not null,
  nombre varchar(30),
  domicilio varchar(30),
  primary key (documento)
 );

 create table prestamos(
  documento char(8) not null,
  codigolibro int unsigned,
  fechaprestamo date not null,
  fechadevolucion date,
  primary key (codigolibro,fechaprestamo)
 );


 insert into socios values('22333444','Juan Perez','Colon 345');
 insert into socios values('23333444','Luis Lopez','Caseros 940');
 insert into socios values('25333444','Ana Herrero','Sucre 120');

 insert into libros values(1,'Manual de 2º grado','Molina Manuel');
 insert into libros values(25,'Aprenda PHP','Oscar Mendez');
 insert into libros values(42,'Martin Fierro','Jose Hernandez');

 insert into prestamos values('22333444',1,'2016-08-10','2016-08-12');
 insert into prestamos values('22333444',1,'2016-08-15',null);
 insert into prestamos values('25333444',25,'2016-08-10','2016-08-13');
 insert into prestamos values('25333444',42,'2016-08-10',null);
 insert into prestamos values('25333444',25,'2016-08-15',null);
 insert into prestamos values('30333444',42,'2016-08-02','2016-08-05');
 insert into prestamos values('25333444',2,'2016-08-02','2016-08-05');
 
 select * from prestamos;
 
 select nombre, titulo, fechaprestamo
 from prestamos as p
 join socios as s
 on s.documento=p.documento
 join libros as l
 on codigolibro=codigo;
 
 select nombre, titulo, fechaprestamo
 from prestamos as p
 left join socios as s
 on p.documento=s.documento
 left join libros as l
 on l.codigo=codigolibro;
 
 select nombre, titulo, fechaprestamo
 from prestamos as p
 left join socios as s
 on p.documento=s.documento
 join libros as l
 on p.codigolibro=l.codigo;
 
 #Funcion de control IF y CASE con varias tablas
 select pro.nombre,
 if(count(p.proveedorid)>0, 'SI', 'NO') as hay
 from proveedor as pro
 left join productos as p
 on pro.id=p.proveedorid
 group by pro.nombre;
 
 select pro.nombre,
 case count(p.proveedorid) when 0 then 'NO'
 else 'SI' end as 'Hay'
 from proveedor as pro
 left join productos as p
 on pro.id=p.proveedorid
 group by pro.nombre;
 
 #variables de usuario
 
# @nombrevariable:= 
# int nombrevarible
 #$variable
 
 select @preciomayor:=max(precio) from productos;
 
 select * from productos where precio=@preciomayor;
 
 select p.nombre, p.descripcion, pro.nombre
 from productos as p
 join proveedor as pro
 on p.proveedorid=pro.id
 where p.precio = @preciomayor;
 
 #Crear table a partir de otra(CREATE-INSERT)
 
 drop table productos;
 drop table proveedor;
 
 create table if not exists productos(
id int unsigned not null auto_increment,
nombre varchar(50) not null,
descripcion text,
proveedor varchar(50),
precio decimal(5,2),
cantidad smallint unsigned default 0,
primary key(id),
unique index (nombre)
);

describe productos;

insert into productos(nombre, descripcion, proveedor, precio, cantidad) 
values('Lenovo 310', 'La mejor laptop', 'Lenovo', 100, 50);
insert into productos(nombre, descripcion, proveedor, precio, cantidad) 
values('Mouse', 'mouse inalambrico', 'Logitech', 15.96, 5);
insert into productos(nombre, descripcion, proveedor, precio, cantidad) 
values('Office 360', 'Paquete de Ofice', 'Microsoft', 150.69, 30);
insert into productos(nombre, descripcion, proveedor, precio, cantidad) 
values('HP Y700', 'La mejor laptop del mercado', 'HP', 10, 15);

create table proveedores
select distinct proveedor as nombre
from productos; 

select * from proveedores;

#Crear una tabla apartir de dos tablas(CREATE-INSERT-JOIN)

drop table productos;
create table if not exists productos(
id int unsigned not null auto_increment,
nombre varchar(50) not null,
descripcion text,
proveedorid int unsigned not null,
precio decimal(5,2),
cantidad smallint unsigned default 0,
primary key(id),
unique index (nombre),
foreign key(proveedorid) references proveedor(id)
);
describe productos;

select * from productos;

drop table if exists proveedor;

create table if not exists proveedor(
id int unsigned not null auto_increment,
nombre varchar(50),
primary key(id),
unique index (nombre)
);

select * from proveedor;

insert into proveedor (nombre) values('Lenovo');
insert into proveedor (nombre) values('Logitech');
insert into proveedor (nombre) values('Microsoft'); 
insert into proveedor (nombre) values('HP');

insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Lenovo 310', 'La mejor laptop', 1, 100, 50);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Mouse', 'mouse inalambrico', 2, 15.96, 5);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Office 360', 'Paquete de Ofice', 3, 150.69, 30);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('HP Y700', 'La mejor laptop del mercado', 4, 10, 15);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Alfombra Lenovo', 'Alfombras asombrosas', 1, 300, 40);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('laptop HP 1000', 'No funciona muy bien',4 , 500, 3);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Volante Gamer', 'El mejor volante para jugar', 2, 800, 5);
insert into productos(nombre, descripcion, proveedorid, precio, cantidad) 
values('Disco duro', 'Obten mas capacidad', 3, 70, 80);

create table cantidadporproveedor
select pro.nombre,count(*) as cantidad
from productos as p
join proveedor as pro
on p.proveedorid=p.id
group by pro.nombre;

select * from cantidadporproveedor;


#Insertar datos buscando en valor en otra tabla
insert into productos(nombre,descripcion, precio, proveedorid, cantidad)
select 'Teclado', 'El mejor teclado', 100, id, 50
from proveedor where nombre='Logitech';

select * from productos;

#Actualizar registros con valores de otra tabla(UPDATE)
alter table productos add proveedor varchar(50);

update productos
join proveedor
on productos.proveedorid=proveedor.id
set productos.proveedor=proveedor.nombre;

alter table productos drop proveedorid;
drop table proveedor;

select * from productos;
select * from proveedor;

#Actualizacion en cascada(UPDATE-JOIN)
update productos as p
join proveedor as pro
on p.proveedorid=pro.id
set p.proveedorid=8,
pro.id=8
where pro.nombre='Logitech';

#Borrar Registros consultando otras tablas(DELETE-JOIN)
delete productos
from productos
join proveedor
on productos.proveedorid=proveedor.id
where proveedor.nombre = 'HP';

select * from productos;
select * from proveedor;

#Borrar registros en cascada
delete productos, proveedor
from productos
join proveedor
on productos.proveedorid=proveedor.id
where proveedor.nombre='Lenovo';


#chequear y reparar tablas(CHECK-REPAIR)

check table productos;

# quick
# fast
# changed
# medium
# extented

check table productos fast quick;

repair table productos;

#Encriptar valores de nuestra tabla

# aes_encrypt("dato a encriptar", "clave de encriptacion")

drop table if exists clientes;

create table clientes(
  nombre varchar(50),
  mail varchar(70),
  tarjetacredito blob,
  primary key (nombre)
);

insert into clientes 
  values ('Marcos Luis','marcosluis@gmail.com',aes_encrypt('5390700823285988','xyz123'));
insert into clientes 
  values ('Ganzalez Ana','gonzalesa@gmail.com',aes_encrypt('4567230823285445','xyz123'));
insert into clientes 
  values ('Lopez German','lopezg@yahoo.com',aes_encrypt('7840704453285443','xyz123'));
  
  select tarjetacredito from clientes;
  
  select cast(aes_decrypt(tarjetacredito, 'xyz123') as char) from clientes;