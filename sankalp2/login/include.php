<?php
$config["fb_app_id"] = "1506911036242466";
$config["fb_app_secret"] = "ebe333338c602540d9fcaa16a64d50b8";
$config["base_url"] = "http://localhost/sankalp2/login/";
$config["fb_fields"] = array(
    array("name" => "name"),
    array("name" => "email"),
    array("name" => "location"),
    array("name" => "gender"),
    array("name" => "birthday")
);


/* Database Settings */
$dbhost = "localhost";
$dbname = "test";
$dbuser = "root";
$dbpass = "";

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());