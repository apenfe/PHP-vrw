<html>

    <head>
        <meta charset="utd-8">
        <title>Numeros multiplos</title>
    </head>

    <body>

        <?php  if(isset($_GET["number"]) && is_numeric($_GET["number"])){ ?>

            <h1>Numeros multiplos de <?= $_GET["number"]; ?></h1>

        <?php

            for($i = 1; $i <= 100; $i++){

                if($i % $_GET["number"] == 0){
                    echo "El numero ".$i. " es multiplo de ". $_GET["number"]."<br/>";
                }

            }

        }else{ ?>

                <p>Introduce un numero correcto por la URL</p>

            <?php } ?>

    </body>

</html>
