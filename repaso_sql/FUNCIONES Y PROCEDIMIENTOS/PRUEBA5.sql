CREATE DEFINER=`root`@`localhost` PROCEDURE `calcular_pares_impares`(in tope INT unsigned)
BEGIN

DECLARE contador INT DEFAULT 1;
DELETE FROM pares;
DELETE FROM impares;

WHILE contador < tope DO

	IF contador % 2 = 0 THEN
		INSERT INTO pares (numeros) VALUES (contador);
	ELSE
		INSERT INTO impares (numeros) VALUES (contador);
	END IF;
	
    SET contador = contador + 1;
    
END WHILE;

END

CREATE DEFINER=`root`@`localhost` PROCEDURE `calcular_pares_impares_repeat`(in tope INT unsigned)
BEGIN

DECLARE contador INT DEFAULT 1;
DELETE FROM pares;
DELETE FROM impares;

REPEAT
		
		IF contador % 2 = 0 THEN
		INSERT INTO pares (numeros) VALUES (contador);
	ELSE
		INSERT INTO impares (numeros) VALUES (contador);
	END IF;
	
    SET contador = contador + 1;
        
	UNTIL contador < tope END REPEAT;

END