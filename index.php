<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Base</title>
</head>
<body>

<?php

class User {
    public string $name;
    private string $surname = "None";
    private string $email;
    private string $login;
    private string $password;

}

$admin = new User();
$admin->name = "John";
echo $admin->name;

echo "<br>";

$redactor = new User();
$redactor->name = "Bob";
echo $redactor->name;

echo "<br>";

$moderator = new User();
$moderator->name = "George";
echo $moderator->name;

?>

</body>
</html>


