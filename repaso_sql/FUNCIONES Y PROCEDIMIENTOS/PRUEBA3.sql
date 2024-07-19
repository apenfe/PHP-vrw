CREATE PROCEDURE `calcular_cuadrados` (in tope int unsigned)
BEGIN
 DECLARE contador INT DEFAULT 0;
delete from cuadrados;

	WHILE contador < tope DO
    INSERT INTO cuadrados (numero,cuadrado) values (contador, power(contador,2));
    SET contador = contador + 1;
  END WHILE;

END
