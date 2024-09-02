# renombrar una tabla
ALTER TABLE usuarios RENAME TO usuarios_rename;

# renombrar una columna
ALTER TABLE usuarios_rename CHANGE apellidos apellido VARCHAR(100);

# modificar columna sin cambiar nombre
ALTER TABLE usuarios_rename MODIFY apellido char(40) NOT NULL;

# añadir una nueva columna
ALTER TABLE usuarios_rename ADD website VARCHAR(100) NOT NULL;

# AÑADIR RESTRICCION A COLUMNA
ALTER TABLE usuarios_rename ADD CONSTRAINT uq_email UNIQUE (email);

# borrar una columna
ALTER TABLE usuarios_rename DROP website;

DESCRIBE usuarios_rename;