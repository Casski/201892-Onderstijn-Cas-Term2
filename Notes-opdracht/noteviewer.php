<?php

    require_once 'dbconnect.php';

?>



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
    <h2>"looks dont matter" -Tox</h2>
    <br><br><a href="index.php">make a note!</a><br><br><br>


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
        $sql = "SELECT * FROM `notes_notes` WHERE `$search_options` LIKE '%$search%'";
    }
    else {
        $sql = "SELECT * FROM `notes_notes`;";
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
                    print '<a href="noteeditor.php?ID=' . $note_ID . '">EDIT</a>';
                    echo "<br><br>";

                }

        }
?>


</body>
</html>