<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>func</title>
</head>

<body>
    
    <?php 
    // declare(strict_types=1);

    function hello($name, $city)
    {
        echo "hello $name from $city";
    }
    hello("milad", "isfahan");

    echo "<br>";
    // In the following example we try to send both a number and a string
    // to the function without using strict:
    function add(int $a, int $b)
    {
        return $a + $b;
    }

    echo add(2, 10);
    echo "<br>";

    // Default Argument Value
    function myAge(int $age = 18)
    {
        echo "my age is $age";
    }
    myAge(22);

    echo "<br>";
    // Return Type Declaration - strict requirement
    function addNumbers(float $a, float $b): float {
        return $a + $b;
    }

    echo addNumbers(3.1, 6.1);

    ?>
</body>

</html>