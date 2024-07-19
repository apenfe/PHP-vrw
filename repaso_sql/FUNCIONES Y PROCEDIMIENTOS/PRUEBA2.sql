CREATE DEFINER=`root`@`localhost` PROCEDURE `prueba2`(IN bajo double, IN alto double, INOUT salida INT)
BEGIN
    SELECT COUNT(*) INTO salida FROM producto WHERE precio BETWEEN bajo AND alto;
END