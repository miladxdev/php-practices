<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="xstyle.css">
    <title>func</title>
</head>

<body>
    
    <?php 

        echo "<h1> PHP Arrays </h1>";

        $cars = array("BMW", "Ford", "Toyota");
        echo "<br> $cars[1]";

        echo "<br>";

        $age = array("Peter" => "25", "Milad" => "27");
        foreach ($age as $x => $x_value) {
            echo $x . " is " . $x_value . " Years old <br>";
        }

        $country = array(
            array("Iran", 24.5, 70.1),
            array("Germany", 12.3, 13.8)
        );

        echo $country[0][1];

        echo "<br>";
        // Sorting arrays
        $numbers = array(4,1,3,2);
        sort($numbers); // ascending order 1,2,3,4
        var_dump($numbers);

        echo "<br>";

        rsort($numbers); // descending order 4,3,2,1
        var_dump($numbers);

        echo "<br>";

        asort($age); // associative array in +ascending order (values)
        var_dump($age);

        echo "<br>";

        ksort($age); // associative array in +ascending order (keys)
        var_dump($age);

        echo "<br>";

        arsort($age); // associative array in -descending order (values)
        var_dump($age);

        echo "<br>";

        krsort($age); // associative array in -descending order (keys)
        var_dump($age);

    ?>
</body>

</html>