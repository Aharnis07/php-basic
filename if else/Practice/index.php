<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funtion</title>
    <style>
        .formlabel{
           display: block;
           margin: auto;
        }
    </style>
</head>
<body>
    <div class="from-group">
        <form class="formlabel" action="action.php" method="POST">
            <label for="bangla">Bangla</label>
            <input type="number" name="bangla"><br>
            <label for="english">English</label>
            <input type="number" name="english"><br>
            <label for="math">Math</label>
            <input type="number" name="math" ><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>