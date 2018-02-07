<?php

    require_once 'dbconnect.php';

    $note_ID = $_GET['ID'];
    $sql = "SELECT * FROM `notes_notes` WHERE `ID` = $note_ID;";
    $result = mysqli_query($conn , $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $get_date = $row['Date'];

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

<form action="updateNoteInDB.php?ID='<?php echo $note_ID; ?>'" name="notes" method="post">
    <br>
    Title : <br>
    <input type="text" name="title" maxlength="24" value="<?php echo $row['Title']; ?>">
    <br><br><br>
    Fill in your note here!<br>
    <!--    <textarea name="note" form="notes" placeholder="Enter text here..."rows="20" cols="60"></textarea>-->
    <input type="text" name="note" value="<?php echo $row['Note_text']?>">
    <br><br>

    <!--select date (current date or a specific date)-->
    Use current date: <input type="checkbox" name="current_date">
    <br>
    Use a different date :<input type="date" name="Note_date" value="<?php echo $get_date; ?>">

    <br><br><br><br><br><br>
    <input type="submit">
</form>

</body>
</html>