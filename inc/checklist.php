<!-- Main section -->
<div id="tasks">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="row">
                <ul id="sortable1" class="connectedSortable">
                    <!-- Todo: Add a message "Insert tasks" if empty -->
                    <?php include "connection.php" ?>
                    <br>
                </ul>
            </div>
        </div>

        <div class="col-md-1"></div>
        <div id="checklist" class="col-md-4">
            <div id="main-title" class="row">
                <div class="col-md-12">
                    <h3>Checkliste</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <p class="subtitle-blue" data-toggle="collapse" data-target="#add-users" ><i class="fa fa-user" aria-hidden="true"></i> Benutzer Hinzufugen</p>
                    <div id="add-users" class="collapse">
                        <br><br>
                        Here you will be able to add users.
                        <br><br><br>
                    </div>
                    <p class="subtitle-gray">Keine Benutzer hinzugefugt.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="subtitle-blue" data-toggle="collapse" data-target="#add-quality"><i class="fa fa-shield" aria-hidden="true"></i> Qualitatswert Setzen</p>
                    <div id="add-quality" class="collapse">
                        <br><br>
                        Here you will be able to set quality.
                        <br><br><br>
                    </div>
                    <p class="subtitle-gray">Kein Qualitätswert gesetzt.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <br>
                    <h4>Checkliste zusammenstellen</h4>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php
                         //submission page
                        include "submission.php";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 task-list">
                    <br>
                    <ul id="sortable2" class="connectedSortable">
                        <br>
                        <li class="ui-state-default">First <a title='delete' class="itemDelete text-right"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></li>
                        <li class="ui-state-default">Second <a title='delete' class="itemDelete"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></li>
                        <li class="ui-state-default">Third <a title='delete' class="itemDelete"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </>
</div>