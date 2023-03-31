<?php 
    session_start();

    $_SESSION ["msg"] = " ";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <div class="container">
        <form action="data.php" method="post">
            Name : <input type="text" name="name"><br>
            Password : <input type="text" name="password"><br>
            <button type="submit" name="submit">Sub</button>
            
        </form>      
    </div>
    
   
</body>
</html>