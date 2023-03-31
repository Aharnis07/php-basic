<?php

if(isset($_POST['submit'])){
    $name = 'Welcome '.$_POST['name']."<br>";
    $email ='My Email '.$_POST['email']."<br>";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" name="submit" value="Done">
    </form>
    <div>
        <?= @$name ?>
        <?= @$email ?>
    </div>
        

</body>
</html>