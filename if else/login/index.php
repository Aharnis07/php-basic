<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="action.php" method="POST">
        Email : <input type="email" name="email" value=<?php $email ?> > 
        <br>
        Password : <input type="password" name="password" value=<?php $password ?>>
        <button type="submit" value="submit">Submit</button>
    </form>
</body>
</html>