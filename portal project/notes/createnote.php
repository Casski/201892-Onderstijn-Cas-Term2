<?php

include('../include/logged_in.php');

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

    <form action="insertNoteToDB.php" name="notes" method="post">
            <br>
            Title : <br>
            <input type="text" name="title" maxlength="24">
            <br><br><br>
            Fill in your note here!<br>

            <!--    <textarea name="note" form="notes" placeholder="Enter text here..."rows="20" cols="60"></textarea>-->
<!--            <input type="text" name="note" placeholder="Enter text here...">-->
        <textarea name="note" placeholder="Enter text here..." rows="15" cols="100"></textarea>

        <br><br>


            <!--select date (current date or a specific date)-->
            Use current date: <input type="checkbox" name="current_date">
            <br>
            Use a different date :<input type="date" name="Note_date">
            <br><br><br><br><br><br>
            <input type="submit">
    </form>



</body>
</html>