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
$dbname = "dbname = postgres";
$credentials = "user = postgres password=sherlock";

$db = pg_connect("$host $port $dbname $credentials");
if (!$db) {
    echo "Error : Nu se poate deschide baza de date\n";
} else {
    echo "Baza de date a fost deschisă cu succes\n";
}


?>
</body>
</html>

