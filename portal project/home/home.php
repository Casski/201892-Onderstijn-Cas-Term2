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
    <title><?php echo $userRow['userName']; ?></title>
</head>
<body>
</body>
</html>
<?php ob_end_flush(); ?>