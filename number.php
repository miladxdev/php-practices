<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="xstyle.css">
    <title>PHP</title>
</head>

<body>

    <?php
    //
    $header = 'php numbers';
    echo "<h1> $header </h1>";

    $x = 4556;
    $y = 3.14;
    $z = 3.14e400;
    echo "x = $x / y = $y / z = $z";

    echo "<small> x type </small>";
    var_dump($x);

    echo "<small> x is int? </small>";
    var_dump(is_int($x));

    echo "<small> x is float? </small>";
    var_dump(is_float($x));

    echo "<small> php int max </small>";
    echo PHP_INT_MAX;

    echo "<small> z is finite/infinite? </small>";
    var_dump(is_finite($z));
    var_dump($z);
    echo "<br>";
    var_dump(is_infinite($z));

    echo "<small> x = '555'+5 --> is numeric? </small>";
    var_dump(is_numeric("555" + 5));


    echo "<small> (3.14) convert [float] --> [int] (3) </small>";
    var_dump((int)$y);
    echo "<br>";
    var_dump(intval($y));

    echo "<small> convert '22.14' string to int(22) </small>";
    var_dump(intval("22.14"));

    echo "<small> constant var - constants are global </small>";
    define("PI", 3.14);
    var_dump(PI);

    echo "<small> constant Array </small>";
    define("cars", ["BMW", "Ford", "Ferrari"]);
    var_dump(cars);
    $a = 9;
    echo "<small> a = 9 | a++ </small>";
    echo $a++;

    echo "<small> a = 9 | ++a </small>";
    echo ++$a;
    // 
    ?>


</body>

</html>