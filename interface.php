<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car</title>
</head>
<body>

</body>
</html>

<?php
interface Human {
    public function talk();
    public function walk();
}
interface Mutant extends Human{
    public function fly();
}

class Person implements Mutant {
    function talk()
    {
        // TODO: Implement talk() method.
        echo 'Human talk<br>';
    }

    function walk()
    {
        // TODO: Implement walk() method.
        echo 'Human walk<br>';
    }

    function fly()
    {
        // TODO: Implement fly() method.
        echo 'The mutant can fly';
    }
}

$LEO = new Person();
$LEO->talk();
$LEO->walk();
$LEO->fly();

//Human talk
//Human walk
//The mutant can fly