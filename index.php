<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <!-- Style sheets-->
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Jquery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom JS functions -->
    <script src="js/script.js"></script>
   </body>
</html>

