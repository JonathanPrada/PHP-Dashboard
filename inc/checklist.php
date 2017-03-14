<!-- Main section -->
<div id="tasks">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="row">
                <!-- <div class="col-md-1 task-color">

                                </div>
                                <div class="col-md-11 task-content align-middle">

                                </div>-->
                <ul id="sortable1" class="connectedSortable">
                    <!-- Todo: Add a message "Insert tasks" if empty -->

                    <li class="ui-state-default">First <a title='delete' class="itemDelete">x</a></li>
                    <li class="ui-state-default">Second <a title='delete' class="itemDelete">x</a></li>
                    <li class="ui-state-default">Third <a title='delete' class="itemDelete">x</a></li>
                </ul>
            </div>

        </div>
        <div class="col-md-1"></div>
        <div id="checklist" class="col-md-4">
            <div id="main-title" class="row">
                <div class="col-md-12">
                    <h2>Checkliste</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="subtitle-blue" data-toggle="collapse" data-target="#add-users" >Benutzer Hinzufugen</p>
                    <div id="add-users" class="collapse">
                        Here you can add users.
                        <br>
                    </div>
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
                    <?php
                        //submission page
                        include "submission.php"
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 task-list">
                    <br>
                    <ul id="sortable2" class="connectedSortable">
                        <li class="ui-state-default">First <a title='delete' class="itemDelete text-right">x</a></li>
                        <li class="ui-state-default">Second <a title='delete' class="itemDelete">x</a></li>
                        <li class="ui-state-default">Third <a title='delete' class="itemDelete">x</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </>
</div>