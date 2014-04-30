/**
 * xml_style.js - js for xml_style plugin using jquery library
 */
 
$(document).ready(function() {
$('span#xml_style').hide();
});
 
$(document).ready(function() { 

$('div.node_content').find('*').each(function() {
var name = $(this).prop("tagName");
var rend = $(this).attr('rend');
var type = $(this).attr('type');

//check for page headers
if (type == 'header') {
$(this).addClass('header');
}


//check for page numbers
if (type == 'pageNum') {
$(this).addClass('page_num');
}


//check centre rendering for elements
if (rend == 'centre') {
$(this).addClass('tei_centre');	
//$(this).wrap('<center></center>');
}
//then set each child element with tei_?element-tag as class
$(this).addClass('tei_'+name);
});

});
