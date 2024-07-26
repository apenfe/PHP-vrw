<meta charset="utf-8"/>

<?php

    $meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];

    echo "<h2>Los meses del año son:</h2>";

    for($i = 0; $i < count($meses); $i++){
        echo $meses[$i]."<br/>";
    }

?>