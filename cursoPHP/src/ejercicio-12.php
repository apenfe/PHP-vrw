<html>

    <head>
        <meta charset="utd-8">
        <title>12 - Navegador</title>
    </head>

    <body>

        <?php

            $ip = $_SERVER['REMOTE_ADDR'];
            $browser = $_SERVER['HTTP_USER_AGENT'];

            echo "Tu IP es: " . $ip;

            if(strstr($browser, "Firefox")) {
                echo "Enhorabuena por usar Firefox";
            }else{
                echo "Estas usando ".$browser." cambiate a Firefox.";
            }

        ?>

    </body>

</html>
