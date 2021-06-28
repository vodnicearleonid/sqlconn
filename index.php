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

function printResults($res) {
    $rows = pg_num_rows($res);;
    if($rows > 0) {

        while ($row = pg_fetch_assoc($res)) {
            echo "ID: ". $row['user_id'].'<br>';
            echo "Name: ". $row['username'].'<br>';
            echo "Email: ". $row['email'].'<br>';
            echo "Password: ". $row['password'].'<br>'.'<br>';
        }

    }
    echo "<hr>";
}

$host = "host = localhost";
$port = "port = 5432";
$dbname = "dbname = dbphpsql";
$credentials = "user = postgres password=sherlock";

$db = pg_connect("$host $port $dbname $credentials");
if (!$db) {
    echo "Error : Nu se poate deschide baza de date\n";
} else {

    //select all *
    $res_db = pg_query($db, "SELECT * FROM users");
    printResults($res_db);

    // select username, email
    $res_db = pg_query($db, "SELECT username, email FROM users");
    printResults($res_db);

    // user_id = 583435
    $res_db = pg_query($db, "SELECT username, email FROM users WHERE user_id = 583435");
    printResults($res_db);

    // ORDER BY user_id DESC
    $res_db = pg_query($db, "SELECT * FROM users WHERE user_id > 1 ORDER BY user_id DESC ");
    printResults($res_db);

    // ORDER BY user_id DESC
    $res_db = pg_query($db, "SELECT * FROM users LIMIT 3 ");
    printResults($res_db);

    if ($res_db != "") {
        echo "The table was created successfully.\n<br>";
        exit;
    }
}

pg_close($db);

?>
</body>
</html>

