<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost'); /Database server/
define('DB_USERNAME', 'root');/User name in Database server/
define('DB_PASSWORD', '');/password of user in Database server/
define('DB_NAME', 'ceh');/database name/

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>