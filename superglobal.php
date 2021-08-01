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

    echo "<small>php self</small>";
    echo $_SERVER['PHP_SELF'];

    echo "<small>server name</small>";
    echo $_SERVER['SERVER_NAME'];

    echo "<small>http host</small>";
    echo $_SERVER['HTTP_HOST'];

    echo "<small>http referer</small>";
    echo $_SERVER["HTTP_REFERER"];

    echo "<small>http user agent</small>";
    echo $_SERVER['HTTP_USER_AGENT'];

    echo "<small>script name</small>";
    echo $_SERVER['SCRIPT_NAME'];

    echo "<br><br><br><br><br><br>";
    echo $_SERVER['REQUEST_METHOD'];
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "name is empty";
        } else {
            echo "<br>" . $name;
        }
    }

    echo "<br><br><br><br><br><br>";

    ?>

    <a href="superglobal.php?subject=PHP&web=W3schools.com">Test $GET</a>
    <?php
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>
</body>

</html>