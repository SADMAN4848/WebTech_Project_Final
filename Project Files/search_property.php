<?php
    include 'controllers/PropertyController.php';
    $key = $_GET["key"];
    $properties = searchProperty($key);
    if(count($properties) > 0){
        foreach($properties as $p){
            echo "<a href='editproperty.php?p_id=".$p["p_id"]."'>".$p["p_location"]."</a><br>";
        }
    }
?>