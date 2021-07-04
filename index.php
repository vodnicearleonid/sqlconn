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
    private string $surname = "EVA";
    private string $email;
    private string $login;
    private string $password;

    function __construct($name, $surname, $login) {
        $this->$name = $name;
        $this->$surname = $surname;
        $this->$login = $login;
    }

    function showAll($text = "") {
        echo $text . $this->name . " , " . $this->surname . "<br>";
    }

    function getSurname() {
        return $this->surname;
    }

}

$admin = new User();
$admin->name = "John";
$admin->showAll("User: ");
$str = $admin->getSurname("User: ");
echo $str;

echo "<br>";

$redactor = new User();
$redactor->name = "Bob";
$redactor->showAll();

$moderator = new User();
$moderator->name = "George";
$moderator->showAll();

?>

</body>
</html>


