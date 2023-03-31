<?php
    #use of md5 & sha1
    echo "<li>use of md5 & sha1</li>"."<br>";
    $str = "hello worl";

    echo "The String : " .$str."<br>";

    echo "Binary md 5 : - " . md5($str, True)."<br>";
    echo "Hex md 5 : - ". md5($str)."<br>";

    echo "Binary Sha1 :- ". sha1($str)."<br>";

    #use of encode or decode
    echo "<li>use of encode or decode</li>"."<br>";
    $password = "Hello World";

    $encodePassword = convert_uuencode($password);

    echo $encodePassword ."<br>";

    $decode = convert_uudecode($encodePassword);

    echo $decode ."<br>";

    #use of bin2hex or hex2bin
    echo "<li>use bin2hex or hex2bin </li>"."<br>";
    
    // echo bin2hex("Hello world");

    $hex = bin2hex("Hello world");
    echo hex2bin($hex);


    #use of min() & max()
    echo "<li> min() & max() </li>"."<br>";

    $min = min( 22, 23, 24);
    echo "Min value : ".$min."<br>";

    $max = max( 22, 23, 24);
    echo "Max value : ".$max ."<br>";

    $val = max(TRUE, FALSE);
    // $val = min(TRUE, FALSE);
    echo $val;

?>