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
    $result = pg_query($db, "INSERT INTO users (username, password, email, created_on) VALUES ('Rex','ZpCKjwyQtrpgpAqReeabcudn5s4jTDXw','rex@gmail.com', '$today')");
    if ($result != "") {
        echo "The table was created successfully.\n";
        exit;
    }
}

pg_close($db);
?>
</body>
</html>

