CREATE DEFINER=`root`@`localhost` FUNCTION `productosEntreDosPrecios`(bajo double, alto double)
 RETURNS int
deterministic
BEGIN
	DECLARE salida INT;
    SELECT COUNT(*) INTO salida FROM producto WHERE precio BETWEEN p_bajo AND p_alto;
    RETURN salida;
END