<?php

    $email  = $_POST ['email'];
    $password = $_POST ['password'];

   
    if( $email && $password == true){
        header("location:welcome.php");
    }else{
        header("location:index.php");
    }
    
?>