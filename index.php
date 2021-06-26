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
    $result = pg_query($db, "CREATE TABLE users (
                          user_id serial PRIMARY KEY,
                          username VARCHAR ( 50 ) UNIQUE NOT NULL,
                          password VARCHAR ( 32 ) NOT NULL,
                          email VARCHAR ( 255 ) UNIQUE NOT NULL,
                          created_on TIMESTAMP NOT NULL,
                          last_login TIMESTAMP
                        );");
    if ($result != "") {
        echo "The table was created successfully.\n";
        exit;
    }
}


pg_close($db);
?>
</body>
</html>

