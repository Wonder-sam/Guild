<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', 'mysqlpass@3306');
define('DB_NAME', 'the_guild');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

if($link == false){
    die("Error. Couldn't connect to database".mysqli_connect_error());
}
?>