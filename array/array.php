<?php
    
    #replace
    echo "<li>array replace</li>";

    $cars = ["Volvo", "BMW", "Lam"];
    $colurs = ["Red", "Green" ,"Blue"];
    $add = ["done" ,22];

    $newArray = array_replace($cars, $colurs, $add) ;

    echo "<pre>";
    print_r($newArray) ;
    echo "</pre>";

    #pop(out the last one) & array_shift(Out the first One)
    echo "<li>Pop & array_shift</li>";

    $fruit = [ "apple", "Mango" ,"Jack-fruit"];

    // $a = array_pop($fruit);
    $a = array_shift($fruit);

    echo "<pre>";
    print_r($fruit) ;
    echo "</pre>";

    #Push (add new in last) & array_unshift( last in add first)
    echo "<li>Push & array_unshift</li>";

    $fruit = [ "a" => "apple", "b" => "Mango"];

    // array_push($fruit, ["F" => "Orange"]);
    array_unshift($fruit, ["F" => "Banana"]);

    echo "<pre>";
    print_r($fruit);
    echo "</pre>";

    #Array Combine
    echo "<li> Array Combine</li>";
    
    $people = ["Hasib","Hamid","Habib"];
    $age = [23, 25, 27];
    $combine = array_combine($people, $age);

    echo "<pre>";
    print_r ($combine) ;
    echo "</pre>";

    #Array Marge & recursive 
    echo "<li> Merge & Recursive</li>";

    $people = ["Hasib" => 23,"Hamid" => 25,"Habib" => 27];
    $add = ["Hasib" => 25];

    // $marge = array_merge_recursive($people,$add);
    $marge = array_merge($people,$add);

    echo "<pre>";
    print_r ($marge) ;
    echo "</pre>";


     
?>