<?php

    include "includes\db.php";  

    $result = $connection -> query("SELECT name_switch FROM `types_switches`");
       
    echo $result;

	$connection->close();

?>