<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
            .tg .tg-nudq{color:#000000;text-align:center}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Klaar!</title>
</head>
<body>
        <form action="#" name="entry" method="post">
            <input type="text" name="search" placeholder="Search...">
            <input type="submit">
        </form>
<?php

    require_once 'dbconnect.php';
    $search = $_POST['search'];

    //zoeken met filter, indien er niks staat, laat hij alles zien
    if (isset($search)) {
        $sql = "SELECT * FROM `checklist` WHERE `naam` LIKE '%$search%'";
    }
    else {
        $sql = "SELECT * FROM `checklist`";
    }

    //database verbinding defineren
    $result = mysqli_query($conn , $sql);
    $resultCheck = mysqli_num_rows($result);

    //uitprinten van resultaten in de vorm van een table
    if ($resultCheck >0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo  "<table class=\"tg\">";
            echo "<th class=\"tg-nudg\">ID</></th>";
            echo "<th class=\"tg-nudq\">" . $row['ID'] . "</th></tr>";
            echo "<tr><td class=\"tg-nudq\">naam</td>";
            echo "<td class=\"tg-nudq\">" . $row['naam'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Zijn je comunicative vaardigheden goed?</td>";
            echo "<td class=\"tg-nudq\">" . $row['com'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Heb je veel geduld?</td>";
            echo "<td class=\"tg-nudq\">" . $row['geduld'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Heb je motivatie voor deze opleiding?</td>";
            echo "<td class=\"tg-nudq\">" . $row['moti'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Kun je in een team werken?</td>";
            echo "<td class=\"tg-nudq\">" . $row['team'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Heb je interesse in technologie?</td>";
            echo "<td class=\"tg-nudq\">" . $row['tech'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Ben je oplossingsgericht?</td>";
            echo "<td class=\"tg-nudq\">" . $row['oplos'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Kun je goed tegen stress en frustratie?</td>";
            echo "<td class=\"tg-nudq\">" . $row['stfr'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Ben je gemotiveerd om te leren?</td>";
            echo "<td class=\"tg-nudq\">" . $row['leren'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Kan je logisch denken?</td>";
            echo "<td class=\"tg-nudq\">" . $row['denken'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Heb je veel motivatie voor zelfstudie?</td>";
            echo "<td class=\"tg-nudq\">" . $row['zelf'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Ben je een gepassioneerd computer gebruiker?</td>";
            echo "<td class=\"tg-nudq\">" . $row['comp'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Ben je goed in de Engelse taal</td>";
            echo "<td class=\"tg-nudq\">" . $row['eng'] . "</td></tr>";
            echo "<tr><td class=\"tg-nudg\">Mening opleiding</td>";
            echo "<td class=\"tg-nudq\">" . $row['opleiding'] . "</td></tr>";
            echo "</table><br><br>";

        }
    }
?>
</body>
</html>