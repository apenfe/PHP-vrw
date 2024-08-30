<?php

if(isset($_POST['titulo']) && isset($_POST['description'])){

    echo "<h2>".$_POST['titulo'] . " " . $_POST['description']."</h2><br>";

}
?>
