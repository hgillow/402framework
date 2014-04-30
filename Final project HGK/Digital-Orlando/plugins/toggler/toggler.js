/**
 * toggle.js - js for tabs plugin using jquery library */

    
    $(document).ready(function() {
    var state = false;
    $(document).on('click', 'span#toggler', function() {
        state = !state;
        if (state) {
            $('app lem').css("background-color", "yellow");
            $('app rdg').css("display", "inline");
            $('app rdg').css("color","red")
        } else {
            $('app lem').css("background-color", "");
            $('app rdg').css("display", "none");
        }
    });
});
