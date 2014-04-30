/**
 * frame.js - default js for Digital Orlando using jquery library
 */
 
//JQuery UI tooltip for document
$(document).ready(function() { 
  $(document).tooltip();
});

//JQuery UI menu for document

$(document).ready(function() {
   $("span#menu").hide();
 }); 
$(document).ready(function() { 
    $("#menu").menu();
});

