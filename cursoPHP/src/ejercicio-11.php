<html>

    <head>
        <meta charset="utd-8">
        <title>11 - Arrays</title>
    </head>

    <body>

        <?php

            $numeros = [3,5,1,4,2];

            echo "<h1>mostrar numeros</h1>";

            foreach ($numeros as $numero) {
                echo "$numero <br>";
            }

            sort($numeros);

            echo "<h1>mostrar numeros</h1>";

            foreach ($numeros as $numero) {
                echo "$numero <br>";
            }

        echo "<h1>Longitud array</h1>";
            echo count($numeros);

        echo "<h1>Buscar en el array</h1>";

        if(array_search(8, $numeros) == true) {
            echo "<h2>El numero esta en el array</h2>";
        }else{
            echo "<h2>El numero NO esta en el array</h2>";
        }





        ?>

    </body>

</html>
