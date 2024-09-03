select * from usuarios;

select email, password from usuarios;

select email, (id + 1) as numero from usuarios;

select email, (id + 1) as numero from usuarios ORDER BY id DESC;