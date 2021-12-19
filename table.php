<?php
$users_db = file("database/users.csv");
$users = array();

foreach ($users_db as $user_line) {
    $user_arr = explode(",", $user_line);
    array_push($users, ["name" => $user_arr[0],
        "email" => $user_arr[1],
        "gender" => $user_arr[2],
        "path" => $user_arr[3]]);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            padding-top: 3rem;
        }
        .container {
            width: 700px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Users</h1>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>gender</th>
            <th>image</th>
        </tr>
        <?php
        foreach ($users as $user) {
            echo $row = "
            <tr>
                <td>".$user['name']."</td>
                <td>".$user['email']."</td>
                <td>".$user['gender']."</td>
                <td><img height='50px' src='".$user['path']."'></td>
            </tr>
            ";
        }
        ?>
</body>
</html>
