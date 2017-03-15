<p class="subtitle-gray">Name der Checkliste</p>
<form action="index.php" method="post">
    <div class="input-group search-field">
        <input id="checklist-name" type="text" name="name">
            <span class="input-group-btn">
                <input type="submit" class="btn btn-primary btn-xs" name="checklist-submit" value="Spreichern"/>
            </span>
    </div>
</form>

<?php

//We have to send a list through the post method
//THIS IS WHERE YOU GO STUCK! you can grab the array from html, but cannot make it come back here
//so that you can use it for filling in the sql query

//If we get a submitted post request
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //then capture the name of the list
    $name = $_POST["name"];

    //Details needed connect to the database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";

    //connect to the database with the details
    try {
        $conn = new PDO("mysql:host=$servername;port=8889;dbname=dashboard", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tasks (description) VALUE ('Lemon')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

} else {
    //do flash message here, exit code

}

?>
