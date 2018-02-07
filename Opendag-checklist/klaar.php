<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
<style type="text/css"> body { background-size: auto; } </style>
</head>
<body>
<?php
session_start();
echo "<h1>Dankjewel <br>" . $_SESSION['naam'] . "<br><br> voor je deelname <br> Je kan nu door naar de tafel</h1>";
?>
<!--code kan in principe allemaal op 1 lijn-->
<form action="index.php" style="text-align: center"><input type="submit" value="klik hier om terug te gaan"></form>
</body>
</html>l