// hide & display extra fields on contact modal

$(document).ready(function() { 

	$("#hideFields").hide();

	$( "#template-contactform-phone" ).focusin(function() {
	  $( "#hideFields" ).slideDown( "slow", function() {
	  });
	});
	
 });
