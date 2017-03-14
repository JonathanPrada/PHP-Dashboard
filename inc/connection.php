<?php //new PHP Data Object //This allows PHP to interact with a database
$dsn = "mysql:host=localhost;dbname=database;port=8889";
$username = "root";
$password = "root";

//(For local use, PHPMyAdmin doesn't use a password.)
$db = new PDO($dsn, $username, $password);
//if this dumps an object we are connected
var_dump($db);