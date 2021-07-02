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
    $header = 'PHP IF ELSE';
    echo "<h1> $header </h1>";

    $t = date("H:i a");


    echo " <small> if else | current time $t</small>";
    if ($t < 12) {
        echo "good morning";
    } else if ($t < 20) {
        echo "have a good day";
    } else {
        echo "have a good night";
    }
    // 
    ?>


</body>

</html>