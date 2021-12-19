<?php
require 'db.php';
$sql = "SELECT * FROM innodb";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        $users[] = [
            'name' => $row['name'],
            'email' => $row['email'],
            'gender' => $row['gender'],
            'path'=>$row['path_to_img']
        ];
    }
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
