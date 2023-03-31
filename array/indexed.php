<?php
    $team = array("Nizam","Robi", "Oyon", "Zahed", "Abid", "Ibrahim");
    echo "<pre>";
    var_dump($team);
    echo "</pre>";

    #associative array

    $age = array( "Nizam" => 32, "Robi" => 27);
    

    foreach($age as $key => $value){
        echo $key.$value ;
    }


    #MultiDimentional Array

    $easyFie = array(
        array("DevTeam","Robi","Zahed","Abid"),
        array("Frontend", "Ibrahim", "Shihab")
    );

    echo "<pre>"."<br>";
    var_dump($easyFie); 
    echo "</pre>";

?>