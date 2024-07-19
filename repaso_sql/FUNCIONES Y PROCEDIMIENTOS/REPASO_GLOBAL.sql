CREATE FUNCTION `productosEntreDosPrecios`(bajo double, alto double) -- FUNCION BASICA
RETURNS INT
DETERMINISTIC

BEGIN
	DECLARE salida INT; -- DECLARAR VARIABLE
    SELECT COUNT(*) INTO salida FROM producto WHERE precio BETWEEN p_bajo AND p_alto; -- ASIGNAR VALOR A VARIABLE
    RETURN salida;
END;

-- --------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE `prueba2`(IN bajo double, IN alto double, INOUT salida INT) -- PROCEDIMEINTO BASICO

BEGIN
    SELECT COUNT(*) INTO salida FROM producto WHERE precio BETWEEN bajo AND alto;
END;

-- --------------------------------------------------------------------------------------------------------------------------

CREATE PROCEDURE `calcular_cuadrados` (in tope int unsigned) -- PROCEDIMEINTO CON WHILE
BEGIN
DECLARE contador INT DEFAULT 0;
delete from cuadrados;

	WHILE contador < tope DO
    INSERT INTO cuadrados (numero,cuadrado) values (contador, power(contador,2));
    SET contador = contador + 1;
  END WHILE;

END

------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `calcular_cuadrados_repeat`(IN veces int UNSIGNED) -- PROCEDIMIENTO CON REPEAT
BEGIN

DECLARE contador INT DEFAULT 0;
delete from cuadrados;

	REPEAT
		
		INSERT INTO cuadrados (numero,cuadrado) values (contador, power(contador,2));
        SET contador = contador + 1;
        
	UNTIL contador > veces END REPEAT;

END

------------------------------------------------------------------------------------------------------------------------------

CREATE PROCEDURE `calcular_pares_impares_loop`(in tope INT unsigned) -- PROCEDIMIENTO CON LOOP E IF
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

-------------------------------------------------------------------------------------------------------------------------------
-- USO DE FUNCION
SET @mes = utilidades_getMesEnLetra(10);
SELECT @mes;

-- USO PROCEDIMIENTO
CALL artistas_getNumAtracAnimal('Carlos','Perez',@datos);
SELECT @datos;

-- CREAR VARIABLE DE SESION
SET @mi_variable = 10;

-- -----------------------------

 IF v_comp < 25000 THEN
            v_lt_25K := v_lt_25K + 1;
        ELSIF v_comp < 50000 THEN
            v_25K_50K := v_25K_50K + 1;
        ELSIF v_comp < 75000 THEN
            v_50K_75K := v_50K_75K + 1;
        ELSIF v_comp < 100000 THEN
            v_75K_100K := v_75K_100K + 1;
        ELSE
            v_ge_100K := v_ge_100K + 1;
        END IF;