$( function() {
    $( "#sortable1, #sortable2" ).sortable({
        connectWith: ".connectedSortable"
    }).disableSelection();
} );

/*
$(document).ready(function(){
    $("#btn2").click(function(){
        $("#sortable1").append("<li class='ui-state-default'>" + $('#tags').val() + "<a title='delete' class='itemDelete'><i class='fa fa-minus-circle' aria-hidden='true'></i></a></li>");
    });
});

*/

/*
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
*/

//Filtering function
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    // This is the input field we filter with
    input = document.getElementById('tags');
    // This turns what the user types values to uppercase
    filter = input.value.toUpperCase();
    // Get the element the id of the list we would like to filter
    ul = document.getElementById("sortable1");
    // Get the li's from that element
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        //for each li, look at the value held by the a tag at index 0
        a = li[i].getElementsByTagName("a")[0];
        //if the value of a converted to uppercase and index retrieve
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

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


