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
            <a href="noteviewer.php">View notes</a><br><br><br>
    <form action="insertNoteToDB.php" name="notes" method="post">
            <br>
            Title : <br>
            <input type="text" name="title" maxlength="24">
            <br><br><br>
            Fill in your note here!<br>

            <!--    <textarea name="note" form="notes" placeholder="Enter text here..."rows="20" cols="60"></textarea>-->
            <input type="text" name="note" placeholder="Enter text here...">
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