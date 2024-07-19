CREATE TABLE alumnos(

	dni char(10),
    nexp char(12) NOT NULL UNIQUE,
    nombre varchar(30),
	CONSTRAINT PK_alumnos PRIMARY KEY (dni)
    
)ENGINE=InnoDB;

CREATE TABLE usan(

	dni_alu char(10),
    numserie_ord varchar(20),
    fecha_inicio date,
    CONSTRAINT PK_usan PRIMARY KEY (dni_alu,numserie_ord)
    
)ENGINE=InnoDB;

CREATE TABLE ordenadores(

	numserie varchar(20),
    marca varchar(30),
    ram numeric,
    tipo varchar(12),
    CONSTRAINT PK_ordenadores PRIMARY KEY (numserie)

)ENGINE=InnoDB;

CREATE TABLE torres(
	
    numserie varchar(20),
    ancho numeric,
    alto numeric,
    CONSTRAINT PK_torres PRIMARY KEY (numserie)

)ENGINE=InnoDB;

CREATE TABLE portatiles(

	numserie varchar(20),
    procesador varchar(10),
    CONSTRAINT PK_portatiles PRIMARY KEY (numserie)

)ENGINE=InnoDB;

CREATE TABLE profesores(

	dni char(10),
	nombre varchar(30),
    numserie varchar(20) NOT NULL UNIQUE,
    representante char(10),
    CONSTRAINT PK_profesores PRIMARY KEY (dni)

)ENGINE=InnoDB;

CREATE TABLE vehiculos(

	matricula char(10),
    cc numeric,
    dni_alumno varchar(10),
    CONSTRAINT PK_vehiculos PRIMARY KEY (matricula)

)ENGINE=InnoDB;