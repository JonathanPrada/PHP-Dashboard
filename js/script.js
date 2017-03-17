$( function() {
    $( "#sortable1, #sortable2" ).sortable({
        connectWith: ".connectedSortable",
        receive: function(event, ui) {
            $(ui.item).append('<a title="delete" class="itemDelete"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>');
        },
        beforeStop: function (event, ui) {
            if ($("#sortable1").find('.ui-sortable-placeholder').length) {
                // about to drop item into #list3, so cancel the sort
                return false;
            }
        }
    }).disableSelection();
} );

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
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            //Dont do the display
            li[i].style.display = "";
        } else {
            //Do the display
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

//On submission of the form get the latest list and do the below
function listGrabber() {
    //get the list and push it into an array
    var array = [];
    $("#sortable2 li").each(function() {
        array.push($(this).text())
    });

    //convert the array to string, we need to do this for the form
    array = array.toString();

    //append to the hidden input field on the form the converted array that is a string
    //when the form gets submitted so does the array through the post method
    $('#checklist-list').val(array);

    //Remove only the unordered list items after submission
    //$('#sortable2').empty();
}

if($('#sortable1 li').find('i').length > 0){
    console.log("This has it!");
}



