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
    $header = 'php operators';
    echo "<h1> $header </h1>";

    echo "<small> Ternary | user = null </small>";
    $user;
    echo $status = (empty($user) ? "anonymous" : "logged in");

    echo "<small> Ternary | user = 'Milad' </small>";
    $user = "Milad";
    echo $status = (empty($user) ? "anonymous" : "$user logged in");
    // -------------------------------------------
    echo "<small> Null coalescing | color = null </small>";
    $user = "Milad";
    echo $color = $color ?? "red";
    // 
    ?>


</body>

</html>