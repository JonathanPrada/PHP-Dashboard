$( function() {
    $( "#sortable1, #sortable2" ).sortable({
        connectWith: ".connectedSortable"
    }).disableSelection();
} );

$(document).ready(function(){
    $("#btn2").click(function(){
        $("#sortable1").append("<li>" + $('#tags').val() + "</li>");
    });
});

$( function() {
    var availableTags = [
        "Check documentation",
        "Do recruitment",
        "Request developers",
        "Order stationary",
        "Chair a meeting",
        "Delegate tasks",
    ];
    $( "#tags" ).autocomplete({
        source: availableTags
    });
} );