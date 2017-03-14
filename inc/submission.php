<p>Name der Checkliste</p>
<br>
<form action="index.php" method="post">
    <div class="input-group search-field">
        <input id="checklist-name" type="text" name="name">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-primary btn-sm" name="checklist-submit" value="Spreichern"/>
                </span>
    </div>
</form>

<?php

//declare some variables
$dom = new DOMDocument();
$name = "";
$tasks = array();

//TODO: Figure out how to pass in PHP UL by ID, perhaps jquery?
$data = "<ul>
 <li>item 1</li>
 <li>item 2</li>
 <li>item 3</li>
</ul>";

//If we get a submitted post request
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //then capture the name of the list
    $name = $_POST["name"];
} else {
    //do flash message here, exit code
}

//Load the data passed in
$dom->loadHTML($data);

//From the data passed in only get the unordered list
$selectedTasks = $dom->getElementsByTagName('ul');

//From selected tasks get the first item, then for each element inside that item
foreach ($selectedTasks->item(0)->getElementsByTagName('li') as $selectedTasks) {
    //echo $selectedTasks->nodeValue.'<br />';
    $tasks[] = $selectedTasks->nodeValue; //List becomes an array with the elements
}

//Holds our associative arrays and each of the individual arrays with further information
$allLists = array();

//Store inside an associative array, the name given for the list and tasks passed in
$savedList = array(
  "listName" => $name,
  "task" => $tasks
);

//insert into allLists array our associative array with the information bundled
$allLists[] = $savedList;
//var_dump($allLists);

?>
