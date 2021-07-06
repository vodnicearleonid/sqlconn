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
trait PrintSome {
    public function talk() {
        echo "Hello world! <br>";
    }

    public function sayBye() {
        echo "Goodbye to all! <br>";
    }
}

trait Testing{
    public function some() {
        echo "Testing a function <br>";
    }
}

class Test{
    use PrintSome, Testing;
}

class Test_2{
    use PrintSome;
}

$obj = new Test();
$obj->talk();
$obj->sayBye();
$obj->some();

$obj_2 = new Test_2();
$obj_2->talk();
$obj_2->sayBye();