<?php

// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
// but I strongly suggest you to use PDO or MySQLi.

define('DBHOST', 'localhost');
define('DBUSER', 'Username');
define('DBPASS', 'Password');
define('DBNAME', 'databasename');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
//$dbcon = mysqli_select_db(DBNAME);

if ( !$conn ) {
    die("Connection failed : " . mysqli_error());
}
