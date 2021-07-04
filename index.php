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
    const PASSWORD = "password CONSTANTA "; // constanta

    public string $name;
    private string $surname = "EVA";
    private string $email;
    private string $login;
    private string $password;

    function __construct($name, $surname, $login) {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
        $this->showAll("User: ");

        echo self::PASSWORD . "<br>"; // Afisarea unei constante in metoda di clasa "self"
    }



    function showAll($text = "") {
        echo $text . $this->name . " , " . $this->surname . " , " . $this->login . "<br>";
    }

    function getSurname() {
        return $this->surname;
    }

    function __destruct() {
        echo "Destructor: " . __CLASS__ . "<br>";
    }

}

$admin = new User("LEONARDO", "VODNICEAR", "LEOlogin");
$str = $admin->getSurname("User: ");
echo $str;

echo "<br>";
//echo User::PASSWORD; // Afisare constanta inafara classei
echo "<br>";

$redactor = new User("Tamara", "Starciuc", "TamaraLogin");
$moderator = new User("Ramsis", "Motan", "RamsisLoghin");


?>

</body>
</html>


