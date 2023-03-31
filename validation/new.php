<?php
$nameErr = $passwordErr = "";
$name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Required";
    } else {
        $password = test_input($_POST["password"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POSt">
        name: <input type="text" name="name">
        passwod: <input type="text" name="password">
        <button type="submit" value="submit"> Submit</button>
    </form>
    <div>
        <?php
        echo "Your Input" . "<br>";
        echo $name . "<br>";
        echo $password;
        ?>
    </div>
</body>

</html>