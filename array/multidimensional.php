<?php
    $marks = [
        "Habib" => [
            "Math" => 35,
            "English" => 77,
            "Bangla" => 88
        ],
        "Ahad" => [
            "Math" => 35,
            "English" => 77,
            "Bangla" => 88
        ]
    ];

    foreach ($marks as $key => $v) {
        echo $key ."<br>";
        foreach($v as $v1){
            echo $v1."<br>";;
        }
    }

    #with list (associative array)
    $emp = [
        [1, "ashik", "salesman", 7000 ],
        [2, "Habib", "manager", 6000 ]
    ];

    echo "<table border= 1px>";
    foreach($emp as list($id,$name,$designation,$salery)){
        echo "<tr>"."<td>$id</td>"."<td>$name</td>"."<td>$designation</td>". "<td>$salery</td>"."<tr>"; 
    }
    echo "</table>";

?>