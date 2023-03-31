<?php
    echo "Today is = ".date("d")."<br>";
    echo "Today is = ".date("j")."<br>";

    #Full Date
    echo "Today is = ".date("d M Y")."<br>";

    #Day
    echo "Day is  = ".date("z")."<br>";
    echo "Week of the Year   = ".date("W")."<br>";
    echo "This is leap Year   = ".date("L")."<br>";


    #Time & Date

    echo "Time & Date :" . date("d-m-y h:i:sa")."<br>";
    echo "MK-Time :" . date("d-m-y h:i:sa",mktime(0,0,0,10, 15, 2003))."<br>";
    echo "GMMK-Time :" . date("d-m-y h:i:sa",gmmktime(0,0,0,10, 15, 2003))."<br>";

?>