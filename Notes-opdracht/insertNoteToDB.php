<?php
    require_once 'dbconnect.php';

    $note_title = $_POST["title"];
    $content = $_POST["note"];
    $date = $_POST["Note_date"];


    //current time option
    if (isset($_POST['current_date'])) {
        $date = date("Ymd");
    }

    //insert definition
    $date = str_replace(["-", "–"], '', $date);
    $sql = "INSERT INTO `notes_notes` (`Date`, `Note_text`, `Title`) VALUES ($date, '$content', '$note_title')";

    //insert data into database + check if failed
    if (!$conn->query($sql))
        echo "query failed";

    //SELECT * FROM `table` WHERE `title` LIKE '%search%'

    header("Location:index.php");
    exit;
?>

