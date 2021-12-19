<?php
    require 'db.php';
    require 'uploads.php';

    function isError() {
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty(@$_POST["gender"])) {
            echo '<p style="color: #91170c;">Invalid Data</p>';
            return true;
        }
        return false;
    }

    function addUser($path, $con) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        $sql = "INSERT INTO innodb (email, name, gender, password, path_to_img) VALUES ('$email', '$name','$gender', '11111', '$path')";
        echo $sql;
        $res = mysqli_query($con, $sql);
        if ($res) {
            $valid = true;
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            width: 400px;
        }
    </style>
</head>
<body style="padding-top: 3rem;">
<div class="container">
    <?php
    if (!isError()) {
        echo "User Added: " . $_POST["name"] . "<br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Gender: " . $_POST["gender"] . "<br>";
        echo "Image path: " . $filePath . "<br>";
        addUser($filePath, $conn);
    }?>
    <hr>
    <a class="btn" href="adduser.php">return back</a>
    <a class="btn" href="table.php">view list</a>
</div>
</body>
</html>