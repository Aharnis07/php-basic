<?php
    session_start();
    if(isset($_SESSION["msg"])){
        echo "Data enter succesfully"."<br>";
    }else{
        echo"enter the data"."<br>";
    }


    if(isset($_POST['submit'])){
        echo $_POST['name'] . "<br>";
        echo $_POST['password'];
    }else{
        echo "Ematy";
    }

    
    
?>   