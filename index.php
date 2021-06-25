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

$conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=sherlock";
$db_connect = pg_connect($conn_string);
 if($db_connect != ""){
     echo "S-a conectat la baza de date!";
 }else{
     echo "Nu s-a conectat la baza de date!";
 }

?>
</body>
</html>

