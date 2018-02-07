<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
<?php
$uhm = array(
    "pascal",
    62,
    213,
    "etoine",
    39,
    312,
    "jan",
    71,
    380,
    "kevin",
    103,
    627,



);

echo "<br><br><br><br>";



$countArray = count($uhm);

$scores = array();





$idx = 0;
while($idx < $countArray) {

    echo  "Naam :  "   .  "$uhm[$idx]" . "<br>";
    $name = $uhm[$idx];
    $idx++;
    echo  "$uhm[$idx]"  . "  keer  uhm" . "<br>";
    $times = $uhm[$idx];
    $idx++;
    echo "In " . "$uhm[$idx]" . " Seconden" . "<br>";
    $seconden = $uhm[$idx];
    $idx++;
    $score = $seconden / $times;
    echo "1 uhm per " . $score . " seconden" . "<br><br><br>";
    array_push($scores , $name , $score);
}

echo "<br><br><br><br>";
var_dump($scores);

$sortedScores = array();
$countArray2 = count($scores);
echo "countarray2 = " .  $countArray2 . "<br><br>";
$idx2 = 1;
$idx3 = 3;
$countArray3 = $countArray2 - 1;
while($idx2 < $countArray3){
    if ($idx2 == $countArray3){
        echo "hayo KNIKKERBAAN";
        $sortedName = array_shift($scores);
        $sortedScore = array_shift($scores);
        array_push($sortedScores, $sortedName);
        array_push($sortedScores, $sortedScore);
    }
    else if ($scores[$idx2] < $scores[$idx3]) {
    $shifter = array_shift($scores);
        array_push($scores, $shifter);
        $shifter = array_shift($scores);
        array_push($scores, $shifter);
    $idx2 = $idx2 +2;
        print_r($scores);
        echo "<br><br>";
        echo $idx2;
        echo "<br><br>";

    }
else {//($scores[$idx2] > $scores[$idx3]){ //hij kan niet in deze else if komen for some reason
    $biggerName = array_shift($scores);
    $biggerScore = array_shift($scores);
    var_dump($scores);
    $shifter = array_shift($scores);
    array_push($scores, $shifter);
    $shifter = array_shift($scores);
    array_push($scores, $shifter);
    array_unshift($scores , $biggerScore);
    array_unshift($scores , $biggerName);
    $idx2 = $idx2 +2;
    print_r($scores);
    echo "<br><br>";
    echo $idx2;
    echo "<br><br>";
}
//    else {
//        $countArray2 = count($scores);
//        echo "dit is de else";
//        var_dump($sortedScores);
//    }
}

var_dump($scores);
echo "<br><br>";
var_dump($sortedScores);






?>
</body>
</html>