<?php
    #indexedArray
    $cars = array ("BMW","Toyota","corola");
    echo $cars [1];

    #Associative
    $age = array("Azad"=>60, "Habib"=>50);
    echo "<br>"."Age".$age["Azad"]."<br>";

    #MultiDimentionalArray

    $cars = array(
        array("Bolvo", 22, 18),
        array("toyota", 13, 12),
    );
    // echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo "Name : ".$cars[0][0] ."Stock : ".$cars[0][1]."Sold : ".$cars[0][2];

?>