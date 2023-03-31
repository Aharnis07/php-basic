<?php
    if(isset($_POST['submit'])){
        echo "welcome".$_POST['name']."<br>";
        echo "Email is".$_POST['email'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        Email: <input type="text" name="email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>