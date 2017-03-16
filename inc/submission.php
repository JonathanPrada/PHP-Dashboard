<p class="subtitle-gray">Name der Checkliste</p>
<form action="index.php" method="post">
    <div class="input-group search-field">
        <input id="checklist-name" type="text" name="name">
        <input id="checklist-list" type="hidden" name="savedlist" value="">
            <span class="input-group-btn">
                <input type="submit" class="btn btn-primary btn-xs" name="checklist-submit" value="Spreichern" onclick="listGrabber()"/>
            </span>
    </div>
</form>

<?php

//If we get a submitted post request
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //then capture the name of the list
    $name = $_POST["name"];
    $list = $_POST["savedlist"];
    $list = explode(",", $list); //convert the string back into array

    //Details needed connect to the database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";

    //CREATE: Insert into the database
    try {
        $conn = new PDO("mysql:host=$servername;port=8889;dbname=dashboard", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // add the list to the lists table
        $sql = "INSERT INTO list (listname) VALUE ('$name')";
        // use exec() because no results are returned
        $conn->exec($sql);
        // grab the list id from the list just saved
        //echo "List saved successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    //READ: Select newly inserted list ID
    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Select the listid from list table where it matches our recently saved list name
        $sql = $conn->prepare("SELECT listid FROM list WHERE listname = '$name'");
        //execute the query and then fetch the results
        $sql->execute();
        $row = $sql->fetch();
        //The row result is returned as an array therefore we use the listid key
        $savedlistid = $row["listid"];
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

/*    //READ: Add these tasks to our task list
    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Prepared statement
        $sql = $conn->prepare("INSERT INTO tasks (description) VALUE (:task)");

        //For each task in our list pass it into the query to be executed
        foreach ($list as $task) {
            $sql->execute(['task' => $task]);
        }

    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }*/

    //READ: Add listid and tasks to our savedlists table
    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Prepared statement
        $sql = $conn->prepare("INSERT INTO savedlists (listid, taskdescription) VALUE (:listid, :task)");

        $listid = $savedlistid;
        //For each task in our list pass it into the query to be executed
        foreach ($list as $task) {
            $sql->execute(['listid' => $listid, 'task' => $task]);
        }
        echo "Your list was saved successfully and your tasks added.";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

}

    /*
    $conn = null;
    } else {
        //do flash message here, exit code
    }
*/


?>
