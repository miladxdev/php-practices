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
    $header = 'PHP LOOPS';
    echo "<h1> $header </h1>";

    echo " <small> while </small>";
    $x = 1;
    while ($x < 10) {
        echo "$x ";
        $x++;
    }

    $x = 1;
    echo " <small> do while </small>";
    do {
        echo "$x ";
        $x++;
    } while ($x < 12);

    echo " <small> for </small>";
    for ($x = 0; $x <= 10; $x++) {
        echo "# ";
    }

    echo " <small> foreach - only for arrays</small>";
    $colors = array("red", "green", "blue");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    echo " <small> foreach - only for arrays - keys and the values</small>";
    $age = array("Peter" => 35, "Ben" => 20, "Milad" => 27);
    foreach ($age as $x => $value) {
        echo "$x is $value yerars old <br>";
    }

    echo " <small>Break - break the loop</small>";
    for ($x = 0; $x < 20; $x++) {
        if ($x == 18) break;
        echo ++$x . " ";
    }

    echo " <small>Continue - skip </small>";
    $x = 0;
    while ($x < 10) {
        if ($x == 5) continue;
        echo "$x ";
        $x++;
    }

    // 
    ?>


</body>

</html>