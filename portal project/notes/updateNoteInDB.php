<?php
    require_once '../include/dbconnect.php';

    $note_title = $_POST["title"];
    $content = $_POST["note"];
    $note_ID = $_GET['ID'];
    $date = $_POST["Note_date"];

    //current time option
    if (isset($_POST['current_date'])) {
        $date = date("Ymd");
    }

    //insert definition
    $date = str_replace(["-", "–"], '', $date);
    $sql = "UPDATE `notes_notes` SET `Date` = $date , `Note_text` = '$content' , `Title` = '$note_title' WHERE `ID` = $note_ID;";

    //insert data into database + check if failed
    if (!$conn->query($sql))
        echo "query failed";

    //SELECT * FROM `table` WHERE `title` LIKE '%search%'

    header("Location:noteviewer.php");
    exit;
?>
