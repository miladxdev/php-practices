<html>

<?php

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";

echo preg_match($pattern, $str);

echo "<br>";

echo preg_match_all($pattern, $str);
?>

</html>