<?php
$Bangla = $_POST['Bangla'];
$English = $_POST['English'];
$Math = $_POST['Math'];

if ($Bangla >= 30 and $Bangla <= 39) {
    echo  $Bangla . " this is grade D in" . " Bangla " . "<br>";
    
    if ($English >= 40 and  $English <= 49) {
        echo  $English . "this is grade C" . " Bangla" . "<br>";
    } elseif ($English >= 50 and  $English <= 59) {
        echo  $English . " this is Grade D in" . " English" . "<br>";
    } else {
        echo "Condition Does Not match" . "<br>";
    }

    if ($Math >= 70 and   $Math <= 79) {
        echo   $Math . "this is grade C in" . " Math" . "<br>";
    }
} else {
    echo "Condition Does Not match";
}

// $d = date("D");
// if($d == "THU"){
//     echo "Have a nice weekend!";
// }else{
//     echo "Nothing";
// }
