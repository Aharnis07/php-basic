<?php
$nameErr = $passwordErr = "";
$name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is Required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["name"])) {
        $passwordErr = "Password is Required";
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
    <title>Data</title>
</head>

<body>
    <div>
        <?php
        echo "Data" . $name . $password;
        ?>
    </div>
</body>

</html>