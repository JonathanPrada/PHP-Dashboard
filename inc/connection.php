<?php
//Details needed connect to the database
$servername = "127.0.0.1";
$username = "root";
$password = "root";

//connect to the database with the details
try {
    $conn = new PDO("mysql:host=$servername;port=8889;dbname=dashboard", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query('SELECT taskid, description FROM tasks ORDER BY description ASC');
    while ($row = $stmt->fetch())
    {
        echo "<li class=\"ui-state-default\"><a>" . $row['description'] . "</a></li>";
    }
}

//catch any errors and display accordingly
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


