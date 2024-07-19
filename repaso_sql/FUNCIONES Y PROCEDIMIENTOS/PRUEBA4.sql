CREATE DEFINER=`root`@`localhost` PROCEDURE `calcular_cuadrados_repeat`(IN veces int UNSIGNED)
BEGIN

DECLARE contador INT DEFAULT 0;
delete from cuadrados;

	REPEAT
		
		INSERT INTO cuadrados (numero,cuadrado) values (contador, power(contador,2));
        SET contador = contador + 1;
        
	UNTIL contador > veces END REPEAT;

END