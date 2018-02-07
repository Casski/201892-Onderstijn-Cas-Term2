<?php
session_start();

require_once 'dbconnect.php';


//defining variables
//--------------------------------------------------------
$naam = $_POST["naam"];
$_SESSION['naam'] = $naam;
$com = $_POST["com"];
$geduld = $_POST["geduld"];
$moti = $_POST["moti"];
$team = $_POST["team"];
$tech = $_POST["tech"];
$oplos = $_POST["oplos"];
$stfr = $_POST["stfr"];
$leren = $_POST["leren"];
$denken = $_POST["denken"];
$zelf = $_POST["zelf"];
$comp = $_POST["comp"];
$eng = $_POST["eng"];
$opleiding = $_POST["opleiding"];
//--------------------------------------------------------


//setting default value if empty
if(!isset($_POST["naam"])) {
    $naam = "anonymous";
    $_SESSION['naam'] = "anonymous";
}
if(!isset($com)) {
    $com = "leeg";
}
if(!isset($geduld)) {
    $geduld = "leeg";
}
if(!isset($moti)) {
    $moti = "leeg";
}
if(!isset($team)) {
    $team = "leeg";
}
if(!isset($tech)) {
    $tech = "leeg";
}
if(!isset($oplos)) {
    $oplos = "leeg";
}
if(!isset($stfr)) {
    $stfr = "leeg";
}
if(!isset($leren)) {
    $leren = "leeg";
}
if(!isset($denken)) {
    $denken = "leeg";
}
if(!isset($zelf)) {
    $zelf = "leeg";
}
if(!isset($comp)) {
    $comp = "leeg";
}
if(!isset($eng)) {
    $eng = "leeg";
}
if(empty($opleiding)) {
    $opleiding = 'leeg';
}

//running query + checking if succeeded
$sql = "INSERT INTO `checklist` (`naam`, `com`, `geduld`, `moti`, `team`, `tech`, `oplos`, `stfr`, `leren`, `denken`, `zelf`, `comp`, `eng`, `opleiding`) VALUES ('$naam', '$com', '$geduld', '$moti', '$team', '$tech', '$oplos', '$stfr', '$leren', '$denken', '$zelf', '$comp', '$eng', '$opleiding')";
if (!$conn->query($sql))
echo "query failed";

else


header("Location:klaar.php");
exit;
?>

