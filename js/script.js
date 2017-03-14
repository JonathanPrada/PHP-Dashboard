$( function() {
    $( "#sortable1, #sortable2" ).sortable({
        connectWith: ".connectedSortable"
    }).disableSelection();
} );

$(document).ready(function(){
    $("#btn2").click(function(){
        $("#sortable1").append("<li class='ui-state-default'>" + $('#tags').val() + "<a title='delete' class='itemDelete'>x</a></li>");
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


$(document).ready(function() {

$('#sortable1').on('click', '.itemDelete', function() {
    $(this).parent().remove()
});

});


$(document).ready(function() {

    $('#sortable2').on('click', '.itemDelete', function() {
        $(this).parent().remove()
    });

});