$(document).ready(funtion() {
    // If mobile is loaded, hide the menu
    if ($(window).width() < 768) {
        $("#nav ul").addClass("hidden");
    }

    //Add nested toggle buttons
    $('ul.children').before('<button type="button" class="btn btn-defaultbtn-lg"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></button>');

    //Add a button toggle to hide or show menu
    $('.responsive-toggle').click(function() {
       $("#nav ul").toggleClass("hidden");
    });

    $(window).resize(function() {
        // IF the window uis 768px or greater, remove any hidden class from menue\
        if ( $(window).width() >= 768) {
            $("#nav ul").removeClass("hidden");
        }
        else {
            $("#nav ul").addClass("hidden");
        }
    });
});