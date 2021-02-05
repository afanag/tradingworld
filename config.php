<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pmauser');
define('DB_PASSWORD', 'rootPass123');
define('DB_DATABASE', 'aaf30b34_chl');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$conn->set_charset("utf8");
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

date_default_timezone_set('Australia/Melbourne');


?>