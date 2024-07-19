CREATE DEFINER=`root`@`localhost` PROCEDURE `calcular_pares_impares_loop`(in tope INT unsigned)
BEGIN

DECLARE contador INT DEFAULT 1;
DELETE FROM pares;
DELETE FROM impares;

bucle: LOOP

IF contador > tope THEN
LEAVE bucle;
END IF;

IF contador % 2 = 0 THEN
		INSERT INTO pares (numeros) VALUES (contador);
	ELSE
		INSERT INTO impares (numeros) VALUES (contador);
	END IF;
	
    SET contador = contador + 1;

END LOOP;

END