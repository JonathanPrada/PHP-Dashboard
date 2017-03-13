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

<!-- Menu -->
<div id="menu">
    <div class="row no-padding">
        <div class="col-md-1"></div>
            <div class="col-md-1">
                <span class="glyphicon glyphicon-menu-hamburger glyphicon-align-center"></span>
            </div>
        <div class="col-md-10">
            <p>Checkliste erstellen</p>
        </div>
    </div>
</div>

<!-- Steps -->
<div class="row">
    <div id="steps">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <span class="glyphicon glyphicon-ok-sign"></span>
            <p>Gruppe erfasen</p>
            <div class="horizontal-line"><hr></div>
        </div>
        <div class="col-md-2">
            <span class="glyphicon glyphicon-ok-sign"></span>
            <p>
                Kunder erfassen
                <div class="horizontal-line"><hr></div>
            </p>
        </div>
        <div class="col-md-2">
            <span class="glyphicon glyphicon-ok-sign"></span>
            <p>
                Kategorie erfassen
                <div class="horizontal-line"><hr></div>
            </p>
            <p class="steps-subtext">Optional</p>
        </div>
        <div class="col-md-2">
            <span class="glyphicon glyphicon-ok-sign"></span>
            <p>Checkliste erstellen</p>
            <div class="horizontal-line"><hr></div>
        </div>
        <div class="col-md-2">
            <span class="glyphicon glyphicon-ok-sign"></span>
            <p>lemente hinzufügen</p>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


<!-- Title -->
<div id="title">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            Elemente hinzufügen
        </div>
    </div>
</div>

<!-- Search Box -->
<div id="search">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="input-group search-field">
                <input id="tags" type="text" class="form-control" placeholder="">
                <span class="input-group-btn">
                <button id="btn2" class="btn btn-default" type="button">X</button>
                </span>
            </div>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>

<!-- Main section -->
<div id="tasks">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="row">
<!-- <div class="col-md-1 task-color">

                </div>
                <div class="col-md-11 task-content align-middle">

                </div>-->
                    <ul id="sortable1" class="connectedSortable">
                        <li class="ui-state-default">Item 1</li>
                        <li class="ui-state-default">Item 2</li>
                        <li class="ui-state-default">Item 3</li>
                        <li class="ui-state-default">Item 4</li>
                        <li class="ui-state-default">Item 5</li>
                    </ul>

            </div>
        </div>
        <div id="checklist" class="col-md-5">
            <div id="main-title" class="row">
                <div class="col-md-12">
                    <h2>Checkliste</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="subtitle-blue">Benutzer Hinzufugen</p>
                    <p class="subtitle-gray">Keine Benutzer hinzugefugt.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="subtitle-blue">Qualitatswert Setzen</p>
                    <p class="subtitle-gray">Kein Qualitätswert gesetzt.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <br>
                    <h3>Checkliste zusammenstellen</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Name der Checkliste</p>
                    <br>
                    <input id="checklist-name" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 task-list">
                    <br>
                    <ul id="sortable2" class="connectedSortable">
                        <li class="ui-state-highlight">Item 1</li>
                        <li class="ui-state-highlight">Item 2</li>
                        <li class="ui-state-highlight">Item 3</li>
                        <li class="ui-state-highlight">Item 4</li>
                        <li class="ui-state-highlight">Item 5</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <br>
                    <button type="button" class="btn btn-primary ">Spreichern</button>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>

