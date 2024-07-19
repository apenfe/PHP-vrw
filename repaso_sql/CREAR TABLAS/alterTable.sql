ALTER TABLE vehiculos ADD
CONSTRAINT FK_vehiculos FOREIGN KEY (dni_alumno) REFERENCES alumnos (dni)
ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE usan ADD
CONSTRAINT FK1_usan FOREIGN KEY (dni_alu) REFERENCES alumnos (dni)
ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE usan ADD
CONSTRAINT FK2_usan FOREIGN KEY (numserie_ord) REFERENCES ordenadores (numserie)
ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE torres ADD
CONSTRAINT FK_torres FOREIGN KEY (numserie) REFERENCES ordenadores (numserie);

ALTER TABLE portatiles ADD
CONSTRAINT FK_portatiles FOREIGN KEY (numserie) REFERENCES ordenadores (numserie);

--

ALTER TABLE profesores ADD
CONSTRAINT FK1_profesores FOREIGN KEY (numserie) REFERENCES portatiles (numserie);

ALTER TABLE profesores ADD
CONSTRAINT FK2_profesores FOREIGN KEY (representante) REFERENCES profesores (dni);