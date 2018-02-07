<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$y = 4;
$x = 0;
while ($y < 1000) {
    $x++;
    $y = $y - 0.5;
    echo "N= $x >> Y= $y <br>";
    $x++;
    $y = $y + 1.5;
    echo "N= $x >> Y= $y <br>";

	//so i was lazy and didn't feel like calculating the test, so instead i wrote this and it gave me answers to 75% of the questions

?>
</body>
</html>
