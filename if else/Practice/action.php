<?php

use LDAP\Result;

    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $math = $_POST['math'];
    

    if($bangla >= 60 and $bangla <= 69){
        
        echo "Bangla : ". $bangla ." Grade B"."<br>";
        
        if($english >= 60 and $english <= 69){
            echo "English : ". $english ." Grade B"."<br>";
        }elseif($english >= 70 and $english <= 79){
            echo "English : ". $english ." Grade B"."<br>";
        }elseif($english >= 80 and $english <= 99){
            echo "English : ". $english ." Grade B"."<br>";
        }else{
            echo $english."Fail";
        }

        if($math >= 60 and $math <= 69){
            echo "Math : ". $math ." Grade B"."<br>";
        }elseif($math >= 70 and $math <= 79){
            echo "Math : ". $math ." Grade A"."<br>";
        }elseif($math >= 80 and $math <= 89){
            echo "Math : ". $math ." Grade A+"."<br>";
        }else{
            echo $math."Fail";
        }
    
    }elseif($bangla >= 70 and $bangla <= 79){
        echo "Bangla : ". $bangla ." Grade A"."<br>";
    }elseif($bangla >= 80 and $bangla <= 89){
        echo "Bangla : ". $bangla ." Grade A+"."<br>";
    }else{
        echo $bangla."Fail";
    }

    $result = $bangla + $english + $math;
    echo "Totla Number = ".$result ."<br>";

    $cgpa = $result / 3;
    echo "CGPA =" . $cgpa;
?>