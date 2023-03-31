<?php
$nameErr = $emailErr = $genderErr = $mobileErr = $passwordErr = "";
$name = $email = $gender = $mobile = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile Number is required";
    } else {
        $mobile = test_input($_POST["mobile"]);
    }


    if (empty($_POST["password"])) {
        $password = "";
    } else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Register</title>
</head>

<body>
    <!-- Register -->
    <div class="container mt-5 p-5">
        <form class="row g-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="row p-2">
                <div class="col-md-6">
                    <div>
                        <h3 class="text-primary">Sign Up</h3>
                        <p class="text-capitalize"> * Please fillup form</p>
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" name="name" id="">
                        <span class="error">* <?php echo $nameErr; ?></span>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail4">
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="Gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender" id="specificSizeSelect">
                            <option selected>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <span class="error">* <?php echo $genderErr; ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="number" class="form-label">Mobile</label>
                        <input type="number" class="form-control" name="mobile" id="">
                        <span class="error text-warning">* <?php echo $mobileErr; ?></span>
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Password
                            <span class="error">* <?php echo $passwordErr; ?></span>
                        </label>
                        <input type="password" class="form-control" name="password" id="Password">
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-5">
                        <?php
                        echo "<h2>You Input</h2>" . "<br>";
                        echo $name . "<br>";
                        echo $email . "<br>";
                        echo $gender . "<br>";
                        echo $mobile . "<br>";
                        echo $password . "<br>";
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>