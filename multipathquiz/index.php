<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
<!--    <link rel="stylesheet" type="text/css" href="css/main.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>

<?php
$ID = $_GET['id'];
if (!isset($_GET['id'])) {
    $ID = 1;
}
//$sql = "SELECT * FROM `notes_notes` WHERE `$search_options` LIKE '%$search%' AND userId='$user'";
$sql = "SELECT * FROM `quiz` WHERE id='$ID'";

$result = mysqli_query($conn , $sql);


$resultCheck = mysqli_num_rows($result);

if ($resultCheck >0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $text = $row['text'];
        $yes = $row['yes'];
        $no = $row['no'];
        $idk = $row['idk'];
    }

}
if($ID > 0) {
    echo "<br><br><h2>" . $text . "</h2><br><br>";
    echo "<a href='index.php?id=$yes'><button>Yes</button></a>";
    echo "<a href='index.php?id=$no'><button>No</button></a>";
    echo "<a href='index.php?id=$idk'><button>I don't know</button></a>";
}
elseif ($ID < 0) {
    echo "<br><br><h1>" . $text . "</h1><br><br>";
    echo "<a href='index.php'>Click here to start again</a><br><br>";
    echo "<a>feel free to donate!</a>";
}
else {
    echo "You are doing something wrong sir";
}





?>
<br><br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="3QFRMSD47RFJY">
    <input type="image" src="https://www.paypalobjects.com/nl_NL/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, de veilige en complete manier van online betalen.">
    <img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>