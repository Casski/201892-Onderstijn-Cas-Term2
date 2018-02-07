<?php

    require_once '../include/dbconnect.php';
    include('../include/logged_in.php');


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
    <?php
    include('../include/head.php');
    include('../include/navbar.php');
    ?>
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
<!--    <input type="text" name="note" value="--><?php //echo $row['Note_text']?><!--">-->
    <textarea name="note" placeholder="Enter text here..." rows="15" cols="100"><?php echo $row['Note_text']?></textarea>

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