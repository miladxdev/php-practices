<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>PHP</title>
    <style>
        body {
            background-color: #111115;
            color: white;
            font-family: sans-serif;
        }

        h1 {
            color: lightslategrey;
        }

        small {
            display: block;
            margin-top: 10px;
            color: grey;

        }
    </style>
</head>

<body>

    <div>
        <?php
        //
        $header = 'php string';
        echo "<h1> $header </h1>";

        $text = "php string";
        echo "<small> length </small> " . strlen($text);
        echo "<small> reverse </small> " . strrev($text);
        echo "<small> positon </small> " . strpos($text, "s");
        echo "<small> word count </small> " . str_word_count($text);
        echo "<small> replace: </small> " . str_replace("php", "P H P", $text);
        // echo "<small> str to array </small> " . str_split($text);
        echo "<small> uppercase first char </small> " . ucwords($text);
        // 
        ?>
    </div>

</body>

</html>