<?php

    require_once '../include/dbconnect.php';
    include ('../include/logged_in.php');
$user = $userRow['userId'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('../include/head.php');
    include('../include/navbar.php');
    ?>
    <title></title>
</head>
<body>


    <form action="#" name="notes" method="post">



        <input type="text" name="search" placeholder="Search...">
        <input type="submit"><br><br>
            <a>Search in :</a>
            <select name="search_in">
                <option value="Note_text">Text</option>
                <option value="Title">Title</option>
                <option value="Date">Date</option>
                <option value="ID">ID</option>
            </select>
            <br><br><br>
        <?php
    $search = $_POST['search'];

    if (isset($search)) {
        $search_options = $_POST['search_in'];
        $sql = "SELECT * FROM `notes_notes` WHERE `$search_options` LIKE '%$search%' AND userId='$user'";
    }
    else {
        $sql = "SELECT * FROM `notes_notes` WHERE userId='$user';";
    }
    $result = mysqli_query($conn , $sql);
    $resultCheck = mysqli_num_rows($result);

        if ($resultCheck >0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $note_ID = $row['ID'];
                    echo $row['ID'] . "<br>";
                    echo $row['Date'] . "<br>";
                    echo $row['Title'] . "<br>";
                    echo $row['Note_text'] . "<br>";
                    echo "Made by : " . $userRow['userName'] . "<br>";
                    print '<a href="noteeditor.php?ID=' . $note_ID . '">EDIT</a>';
                    echo "<br><br>";

                }

        }
?>


</body>
</html>