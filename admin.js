$(document).ready(function(){
    $('#admin_menu').tabs()
    $('input[type=submit], a, button').button()
	.click(function( event ) {
		event.preventDefault();
	});
})

