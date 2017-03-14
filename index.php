<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <!-- Style sheets-->
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    </head>
    <body>

    <div class="container">

    <?php
        //Menu
        include "inc/header.php";

        //Steps
        include "inc/steps.php";

        //Search
        include "inc/search.php";

        //Checklist
        include "inc/checklist.php";
    ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

