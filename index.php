<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP + MySQL</title>
</head>

<body>
<h3> PHP + MySQL </h3>
<?php

$host = "host = localhost";
$port = "port = 5432";
$dbname = "dbname = dbphpsql";
$credentials = "user = postgres password=sherlock";

$db = pg_connect("$host $port $dbname $credentials");
if (!$db) {
    echo "Error : Nu se poate deschide baza de date\n";
} else {
    //echo "Baza de date a fost deschisă cu succes\n";
    //echo "Baza de date a fost deschisă cu succes pe : " . pg_host($db) . "<br/>\n";

        $today = date("Y-m-d");
        //$result = pg_query($db, "UPDATE users SET created_on = '$today' WHERE user_id = 5 ");
        //$result = pg_query($db, "UPDATE users SET created_on = '$today' WHERE user_id <= 4 ");
        //$result = pg_query($db, "DELETE FROM users WHERE user_id < 583431 or user_id = 583434");
        //$result = pg_query($db, "DELETE FROM users WHERE user_id = 583431 AND username = 'Edward_583430'");
        $result = pg_query($db, "DELETE FROM users WHERE user_id = 583431 AND username = 'Edward_583430'");

        if ($result != "") {
            echo "The table was created successfully.\n<br>";
            exit;
        }
}

pg_close($db);


/*
$db = pg_connect("$host $port $dbname $credentials");
if (!$db) {
    echo "Error : Nu se poate deschide baza de date\n";
} else {
    //echo "Baza de date a fost deschisă cu succes\n";
    //echo "Baza de date a fost deschisă cu succes pe : " . pg_host($db) . "<br/>\n";
    $result = pg_query($db, "SELECT user_id FROM users ORDER BY user_id DESC limit 1");
    $user_id = pg_fetch_assoc($result);
    $id = $user_id['user_id'];

    for($i = $id; $i < ($id + 5); $i++) {
        $username = "Edward_".$i;
        $password = md5(rand(1, 99));
        $email = strtolower($username);
        $today = date("Y-m-d");
        $result = pg_query($db, "INSERT INTO users (username, password, email, created_on)
                                                VALUES ('$username','$password','$email@gmail.com','$today')");

        if ($result != "") {
            echo "The table was created successfully.\n<br>";
        }
    }
}

pg_close($db);
*/
?>
</body>
</html>

